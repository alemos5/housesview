@extends('layouts.app')
@section('content')
<?php
//    echo json_encode($dataBusqueda); die();

    ?>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>



<div class="bg-gray">
  <div class="p-t-20">
    <div class="container page">
      <div class="row">
          <div class="col-lg-4">
              <div class="filters">
                  <form class="login-form" method="post" action="{{ route('resultado-busqueda-map') }}" id="busqueda">
                      @csrf
                      <input type="hidden" name="tipo_vivienda" value="{{$dataBusqueda['tipo_vivienda']}}">
                      <input type="hidden" name="tipo_inmueble" value="{{$dataBusqueda['tipo_inmueble']}}">
                      <input type="hidden" name="cant_ambiente" value="{{$dataBusqueda['cant_ambiente']}}">
                      <input type="hidden" name="tipo_vendedor" value="{{$dataBusqueda['tipo_vendedor']}}">
                      <input type="hidden" name="direccion" value="{{$dataBusqueda['direccion']}}">

                      <h4>Busqueda Avanzada</h4>
                      <div class="">
                          <input type="text" name="codigo" value="<?php if (isset($dataBusqueda['codigo'])) { echo $dataBusqueda['codigo'];  } ?>" placeholder="codigo">
                      </div>
                      <div class="">
                          <select name="tipo_vivienda" class="">
                              <option value="">Tipo de contrato</option>
                              <?php if (isset($dataBusqueda['tipo_vivienda'])) {
                              if ($dataBusqueda['tipo_vivienda'] == 3) {
                              ?><option selected value="3">Temporal</option><?php
                              }else{
                              ?><option value="3">Temporal</option><?php
                              }
                              if ($dataBusqueda['tipo_vivienda'] == 2) {
                              ?><option selected value="2">Alquiler</option><?php
                              }else{
                              ?><option value="2">Alquiler</option><?php
                              }
                              if ($dataBusqueda['tipo_vivienda'] == 1) {
                              ?><option selected value="1">Venta</option><?php
                              }else{
                              ?><option value="1">Venta</option><?php
                              }
                              }else{
                              ?>
                              <option value="3">Temporal</option>
                              <option value="2">Alquiler</option>
                              <option value="1">Venta</option>
                              <?php
                              }
                              ?>
                          </select>
                      </div>
                      <div class="">
                          <input type="text" name="rango_precio_desde" value="<?php if (isset($dataBusqueda['rango_precio_desde'])) { echo $dataBusqueda['rango_precio_desde'];  } ?>" placeholder="Rango de precio desde">
                      </div>
                      <div class="">
                          <input type="text" name="rango_precio_hasta" value="<?php if (isset($dataBusqueda['rango_precio_hasta'])) { echo $dataBusqueda['rango_precio_hasta'];  } ?>" placeholder="Rango de precio hasta">
                      </div>
                      <div class="">
                          <select class="" name="cant_ambiente">
                              <option value="">Ambientes</option>
                              <?php if (isset($dataBusqueda['cant_ambiente'])) {
                              if ($dataBusqueda['cant_ambiente'] == 1) {
                              ?><option selected value="1">1</option><?php
                              }else{
                              ?><option value="1">1</option><?php
                              }
                              if ($dataBusqueda['cant_ambiente'] == 2) {
                              ?><option selected value="2">2</option><?php
                              }else{
                              ?><option value="2">2</option><?php
                              }
                              if ($dataBusqueda['cant_ambiente'] == 3) {
                              ?><option selected value="3">3</option><?php
                              }else{
                              ?><option value="3">3</option><?php
                              }
                              }else{
                              ?>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <?php
                              }
                              ?>
                          </select>
                      </div>
                      <input type="submit" value="Buscar">

                      <br><h4>Comodidades</h4><hr>
                      <?php
                      $grupoEavs = \App\Models\PropiedadGrupos::all();
                      $count = 0;
                      foreach ($grupoEavs as $grupoEav) {
                      echo "<br><b>".$grupoEav->grupo."</b><hr>";
                      $propiedadesEavs = \App\Models\PropiedadEavs::where('grupo_id', '=', $grupoEav->id)->get();
                      foreach ($propiedadesEavs as $propiedadesEav) {
                      if (isset($dataBusqueda['amenities'][$propiedadesEav->id])) {
                          $check = 'checked';
                      }else{
                          $check = false;
                      }
                      ?>
                      <div class="form-check">
                          <input <?php echo $check; ?> name="amenities[<?php echo $propiedadesEav->id ?>]" onclick="submitFormulario()" class="form-check-input" type="checkbox" value="<?php echo $propiedadesEav->id ?>" rel="<?php echo $propiedadesEav->id ?>" id="<?php echo $propiedadesEav->id ?>">
                          <label class="form-check-label" for="<?php echo $propiedadesEav->id ?>">
                              <?php echo $propiedadesEav->icon . " " .  $propiedadesEav->attribute?>
                          </label>
                      </div>
                      <?php
                      $count++;
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
                 ordenar por: < <i onclick="listResult()" class="fas fa-th-large"></i>  <i onclick="listResult()"  class="fas fa-stream"></i>  <i onclick="map()"  class="fas fa-map-marker-alt"></i>
               </div>
             </div>
          </div>
            <div class="js-google-map" style="width: 100%; height: 500px;"></div>
        </div>
      </div>
    </div>
</div>

    <?php
    $geo = [];
    foreach ($propiedad as $propiedadesItem) {
        $geo[] = array(
            $propiedadesItem['data']->direccion,
            $propiedadesItem['data']->latitud,
            $propiedadesItem['data']->longitud,
            $propiedadesItem['data']->id
        );
    }
    ?>

<script type="text/javascript">
  // var locations = [
  //   ['Bondi Beach', -33.890542, 151.274856, 4],
  //   ['Coogee Beach', -33.923036, 151.259052, 5],
  //   ['Cronulla Beach', -34.028249, 151.157507, 3],
  //   ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
  //   ['Maroubra Beach', -33.950198, 151.259302, 1]
  // ];
  var locations = <?php echo json_encode($geo); ?>;

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

  function submitFormulario(){
      document.getElementById("busqueda").submit();
  }

  function map() {
      $('#busqueda').attr('action', 'resultado-busqueda-map');
      document.getElementById("busqueda").submit();
  }

  function listResult(){
      $('#busqueda').attr('action', 'resultado-busqueda-search');
      document.getElementById("busqueda").submit();
  }
</script>

@endsection
