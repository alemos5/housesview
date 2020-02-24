@extends('layouts.app')
@section('content')

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>



<div class="bg-gray">
  <div class="p-t-20">
    <div class="container page">
      <div class="row">
        <div class="col-lg-4">
          <div class="filters">
              <form class="login-form" method="post" action="{{ route('resultado-busqueda-search') }}" id="login">
                  @csrf
                    <h4>Busqueda Avanzada</h4>
                    <div class="">
                      <input type="text" name="codigo" value="" placeholder="codigo">
                    </div>
                    <div class="">
                      <select name="tipo_vivienda" class="" name="tipocontrato">
                        <option value="">Tipo de contrato</option>
                        <option value="3">Temporal</option>
                        <option value="2">Alquiler</option>
                        <option value="1">Venta</option>
                      </select>
                    </div>
                    <div class="">
                      <input type="text" name="rango_precio_desde" value="" placeholder="Rango de precio desde">
                    </div>
                    <div class="">
                      <input type="text" name="rango_precio_hasta" value="" placeholder="Rango de precio hasta">
                    </div>
                    <div class="">
                      <select class="" name="cant_ambiente">
                        <option value="">Ambientes</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                  <input type="submit" value="Buscar">

                  <br><h4>Comodidades</h4><hr>
                 <?php
                 $grupoEavs = \App\Models\PropiedadGrupos::all();
                 foreach ($grupoEavs as $grupoEav) {
                    echo "<br><b>".$grupoEav->grupo."</b><hr>";
                    $propiedadesEavs = \App\Models\PropiedadEavs::where('grupo_id', '=', $grupoEav->id)->get();
                    foreach ($propiedadesEavs as $propiedadesEav) {
                    ?>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="<?php echo $propiedadesEav->id ?>" rel="<?php echo $propiedadesEav->id ?>" id="<?php echo $propiedadesEav->id ?>">
                          <label class="form-check-label" for="<?php echo $propiedadesEav->id ?>">
                            <?php echo $propiedadesEav->icon . " " .  $propiedadesEav->attribute?>
                          </label>
                        </div>
                 <?php
                  }
                 }
                 ?>
                 <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Default checkbox
      </label>
    </div>
              </form>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="pagination pt-0">
             <div class="row">
               <div class="col-lg-12">
               </div>
               <div class="col-lg-4">
               </div>
               <div class="col-lg-4">
               </div>
               <div class="col-lg-4">
                 ordenar por: < <i class="fas fa-th-large"></i>  <i class="fas fa-stream"></i>  <i class="fas fa-map-marker-alt"></i>
               </div>
             </div>
          </div>
            <div class="js-google-map" style="width: 100%; height: 500px;"></div>
        </div>
      </div>
    </div>
</div>


<script type="text/javascript">
  var locations = [
    ['Bondi Beach', -33.890542, 151.274856, 4],
    ['Coogee Beach', -33.923036, 151.259052, 5],
    ['Cronulla Beach', -34.028249, 151.157507, 3],
    ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
    ['Maroubra Beach', -33.950198, 151.259302, 1]
  ];

  var map_options = {
    zoom: 10,
    center: new google.maps.LatLng(-33.92, 151.25),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.querySelector('.js-google-map'), map_options);

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }
</script>



@endsection
