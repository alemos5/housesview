@extends('layouts.app')
@section('content')
    <?php
//    echo json_encode($dataBusqueda['amenities']['2']); die();
//        $value = 2;
//        if (isset($dataBusqueda['amenities'][$value])) {
//            echo "existe";
//        }else{
//            echo "no existe";
//        }
//        die();
    ?>
<div class="container page">
  <div class="row">
    <div class="col-lg-4">
      <div class="filters">
          <form class="login-form" method="post" action="{{ route('resultado-busqueda-search') }}" id="busqueda">
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
      <div class="pagination">
         <div class="row">
           <div class="col-lg-12">
           </div>
           <div class="col-lg-4">
             <?php echo count($propiedad); ?> Resultados
           </div>
           <div class="col-lg-4">
           </div>
           <div class="col-lg-4">
             ordenar por: < <i onclick="listResult()" class="fas fa-th-large"></i>  <i onclick="listResult()" class="fas fa-stream"></i>  <i onclick="map()" class="fas fa-map-marker-alt"></i>
           </div>
         </div>
      </div>
      <ul class="pageresultlist">

          <?php
//          echo json_encode($propiedad); die();
//          foreach ($propiedad as $data) {
//              echo json_encode($data['data']->id)."<hr>";
//          }
//          die();
          ?>
        @forelse($propiedad as $propiedadesItem)

        <li class="searchresult @forelse($propiedadesItem['amenities'] as $amenitiesItem) {{$amenitiesItem->id_eav}} @empty @endforelse">

            <div id="favoritoDiv" class="favoritoDiv">
            <?php
            $favorito = \App\Http\Controllers\FavoritosController::getFavoritoPersonal($propiedadesItem['data']->id);
            if ($favorito) {
                ?>
                    <font color="red">
                        <i style="cursor: pointer" onclick="addFavorito({{ $propiedadesItem['data']->id }}, 0)" id="favo-{{$propiedadesItem['data']->id }}" class="fas fa-heart"></i>
                    </font>
                <?php
            }else{
                ?>
                <font color="red">
                    <i style="cursor: pointer" onclick="addFavorito({{ $propiedadesItem['data']->id }}, 1)" id="favo-{{$propiedadesItem['data']->id }}"  class="far fa-heart"></i>
                </font>
                <?php
            }
            ?>
            </div>
          <a href="{{route('/')}}/propiedad/{{$propiedadesItem['data']->id}}">
            <!--start propiety-->
            <div class="propietythumb row">
              <div class="col-lg-6">
                <div class="imgprop">
                  <img src="images/prop/p1.jpg" alt="">
                </div>
                <div class="row dataprice nopadding">
                  <div class="col-lg-2">
                    <div class="price">
                      ${{$propiedadesItem['data']->precio}}
                    </div>

                  </div>
                  <div class="col-lg-10">
                    <ul>
                        <?php
                        foreach ($propiedadesItem['amenities'] as $amenity) {
                            echo $amenity->icon;
                        }
                        ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="viewthumb">

                  <div class="datacolor">
                    <div class="row">
                      <div class="col-lg-12">
                        <h3>{{$propiedadesItem['data']->titulo}}</h3>
                        <p>{{$propiedadesItem['data']->direccion}}</p>
                      </div>
                    </div>
                    <ul class="datainfo">
                      <li><img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt=""></li>
                      <li>{{ $propiedadesItem['data']->nombre }}</li>
                      <li>  </li>
                      <li><i class="fas fa-eye"></i></li>
                      <li>Visto: {{ $propiedadesItem['data']->vista }}</li>
                    </ul>
                    <ul class="dataprop">
                      <li><strong>Casa</strong> </li>
                      <li>Cuartos {{$propiedadesItem['data']->cant_dormitorio}} - </li>
                      <li>Baños {{$propiedadesItem['data']->cant_banio}} - </li>
                      <li>{{$propiedadesItem['data']->metros}}m²</li>
                      <?php
                        foreach ($propiedadesItem['amenities'] as $amenity) {
                            echo "<li>".$amenity->attribute.": ".$amenity->cantidad."&nbsp;</li>";
                        }
                      ?>
                    </ul>
                    <div class="row prodescrip">
                        {{ $propiedadesItem['data']->descripcion }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </li>
        @empty
          No hay resultados
        @endforelse
        <!--end Prop-->
      </ul>
    </div>
  </div>
</div>
@endsection
<script>
    function addFavorito(id, acction) {

        var idfavo = "favo-" + id;
        var favo= document.getElementById(idfavo);
        if(favo.className == 'fas fa-heart'){
            favo.className = 'far fa-heart';
        } else {
            favo.className = 'fas fa-heart';
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#localidad').html('');
        jQuery.post("<?php echo route('/')."/favoritos/addFavorito"; ?>",{ id:id, acction:acction },
        function(data){
            $('#favoritoDiv').html(data);
        });

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


