@extends('layouts.app')
<link rel="stylesheet" href="{{route('/')}}/css/stepform.css">
@section('content')

<div class="bg-gray publicate">
  <div class="container page">
      <div class="stepform">
        <form name="msform" id="msform"  action="{{route('/').'/propiedades'}}" method="POST">
        @csrf
            <input type="submit" value="enviar">
        <!-- progressbar -->
        <ul id="progressbar">
        <li class="active">Tipo de Propiedad</li>
        <li>Datos de la propiedad</li>
        <li>Datos del vendedor</li>
        <li>Finalizar</li>
        </ul>
        <!-- fieldsets -->
        <fieldset class="step1">
        <h2 class="fs-title">¿Que tipo de operacion realizaras?</h2>
        <h3 class="fs-subtitle">Paso 1</h3>
        <div class="row">
          <div class="col-lg-4 cardstep">
            <input type="radio" name="tipo_operacions_id" value="1" id="venta" >
            <label for="venta">
              <img src="{{route('/')}}/images/icons/1.png" alt="">
              <h4>Venta</h4>
            </label>
          </div>
          <div class="col-lg-4 cardstep">
            <input type="radio" name="tipo_operacions_id" value="2" id="alquiler" >
            <label for="alquiler">
              <img src="{{route('/')}}/images/icons/2.png" alt="">
              <h4>Alquiler</h4>
            </label>

          </div>
          <div class="col-lg-4 cardstep">
            <input type="radio" name="tipo_operacions_id" value="3" id="temporal" >
            <label for="temporal">
              <img src="{{route('/')}}/images/icons/3.png" alt="">
              <h4>Temporal</h4>
            </label>
          </div>
        </div>
          <input type="button" name="next" class="next action-button float-right" value="Siguiente" />

        </fieldset>
        <fieldset class="step2">
        <h2 class="fs-title">Ubicacion</h2>
        <h3 class="fs-subtitle">Paso 2</h3>
        <div class="row">
          <div class="col-lg-3">

          </div>
          <div class="col-lg-6">
            <div class="">
              <select class="form-control form-control-sm" name="tipo_propiedades_id">
                <option value="">¿Que tipo de propiedad queres publicar?</option>
                <option value="">Casa</option>
                <option value="">Departamento</option>
                <option value="">PH</option>
              </select>
            </div>
          <div class="">
            <p>Ubicacion</p>
            <select onchange="getLocalidad(this.value)" class="form-control form-control-sm" name="provincias_id">
                <option value="">Seleccione ...</option>
                <?php
                $provinvias = \App\Models\Provincias::all();
                foreach ($provinvias as $provinvia) {
                    ?><option value="<?php echo $provinvia->id; ?>"><?php echo $provinvia->provincia; ?></option><?php
                }
                ?>
            </select>
          </div>
            <div class="">
              <select id="localidad" class="form-control form-control-sm" name="localidads_id">
                <option value="">Seleccione ...</option>
              </select>
            </div>
{{--            <div class="">--}}
{{--              <select class="form-control form-control-sm" name="">--}}
{{--                <option value="">Barrio</option>--}}
{{--                <option value="">Almagro</option>--}}
{{--                <option value="">Chacarita</option>--}}
{{--                <option value="">Boedo</option>--}}
{{--              </select>--}}
{{--            </div>--}}
            <div class="">
              <input class="form-control" type="text" name="direccion"  value="Direccion completa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9974385330224!2d-58.37391808477039!3d-34.60422628045927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33532ab7885c1%3A0xac89b76d3dec33c7!2sSarmiento%20347%2C%20C1041%20AAP%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1574276201517!5m2!1ses!2sar" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
          <div class="col-lg-3">

          </div>
        </div>

        <input type="button" name="next" class="next action-button float-right" value="Siguiente" />
        <input type="button" name="previous" class="previous action-button float-right"  value="Anterior" />
        </fieldset>
        <fieldset class="step3">
        <h2 class="fs-title">Datos de la Propiedad</h2>
        <h3 class="fs-subtitle">Paso 3</h3>
        <div class="row">
          <div class="col-lg-2">

          </div>
          <div class="col-lg-8">
            <div class="">
              <input class="form-control" type="text" name="titulo" value="Titulo para mostrar">
            </div>
            <div class="">
              <textarea name="name" rows="4" cols="50" placeholder="Detalles"></textarea>
            </div>
            <div class="row">
              <div class="col-lg-4">
                Precio
              </div>
              <div class="col-lg-4">
                <select class="form-control form-control-sm" name="moneda">
                  <option value="Indique la moneda"></option>
                  <option value="">$</option>
                  <option value="">U$D</option>
                </select>
              </div>
              <div class="col-lg-4">
                <input class="form-control" type="text" name="precio" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                Expensas
              </div>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="expensas" value="">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-4">
                Ambientes
              </div>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                Dormitorios
              </div>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                Baños
              </div>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                Cocheras
              </div>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                Toilettes
              </div>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-center">
                Altiguedad
              </div>
              <div class="row col-lg-12 text-center antiguedad">
                <div class="col-lg-4">
                  <input type="radio" name="antiguedad" value="" id="contruccion"><label for="contruccion">En Construccion</label>
                </div>
                <div class="col-lg-4">
                  <input type="radio" name="antiguedad" value="" id="estrenar"><label for="estrenar">A Estrenar</label>
                </div>
                <div class="col-lg-4">
                  <input type="radio" name="antiguedad" value="" id="anos"><label for="anos">Años</label>
                </div>
              </div>
              <div class="col-lg-4">
                Antiguedad
              </div>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="" value="" placeholder="Años de antiguedad">
              </div>
                <div class="col-lg-4">
                  Mentros2
                </div>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="" value="">
                </div>
                <div class="col-lg-4">
                  Metros2 Totales
                </div>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="" value="">
                </div>
            </div>

          </div>
          <div class="col-lg-2">

          </div>
        </div>
        <input type="button" name="next" class="next action-button float-right" value="Siguiente" />
        <input type="button" name="previous" class="previous action-button float-right"  value="Anterior" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Caracteristicas</h2>
        <h3 class="fs-subtitle">¡Ultimo Paso!</h3>
        Servicios
        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="" value="" id="lavadero"><label for="lavadero">Lavadero</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="vigilancia"><label for="lavadero">vigilancia</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="encargado"><label for="lavadero">encargado</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="acensor"><label for="acensor">Acensor</label>
          </div>
          <div class="col-lg-3">

          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="limpieza"><label for="limpieza">Limplieza</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="cajafuerte"><label for="cajafuerte">Caja Fuerte</label>
          </div>
        </div>
        <hr>
          Caracteristicas
        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="" value="" id="mascotas"><label for="mascotas">Permite mascotas</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="futboll"><label for="futboll">Cancha de fútbol</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="tenis"><label for="tenis">Cancha de tenis</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="parrilla"><label for="parrilla">Parrilla</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Pileta"><label for="Pileta">Pileta</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="juegos"><label for="juegos">Sala de juegos</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Solarium"><label for="Solarium">Solarium</label>
          </div>
        </div>
        <hr>
          Comodidades
        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="" value="" id="aire"><label for="aire">Aire acondicionado</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Calefaccion"><label for="Calefaccion">Calefacción</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Microondas"><label for="Microondas">Microondas</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Frigobar"><label for="Frigobar">Frigobar</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Ventilador"><label for="Ventilador">Ventilador</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Lavarropas"><label for="Lavarropas">Lavarropas</label>
          </div>
          <div class="col-lg-3">
              <input type="checkbox" name="" value="" id="Lavavajillas"><label for="Lavavajillas">Lavavajillas</label>
          </div>
        </div>
        <input type="button" name="previous" class="previous action-button"  value="Anterior" />
        <input type="submit" name="submit" class="submit action-button" value="Publicar" />
        </fieldset>

            <button onclick="submit()">msform</button>

        </form>
      </div>
  </div>
</div>


<script src="{{route('/')}}/js/stepform.js"></script>
<script src="{{route('/')}}/js/jquery.easing.min.js"></script>

<script>

    function submit() {
        document.msform.submit()
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getLocalidad(id){
        $('#localidad').html('');
        jQuery.post("<?php echo route('/')."/provincias/getLocalidad"; ?>",{ id:id },
            function(data){
                $('#localidad').html(data);
            });
    }

</script>
@endsection
