@extends('layouts.app')
@section('content')

<div class="container page">
  <div class="row">
    <div class="col-lg-8">
        <div class="propietydetail">
          <div class="col-lg-12">
            <div class="tags">
              <span class="tagoperation">VENTA</span> <span class="tagdate">{{$propiedades['created_at']}}</span> <span class="tagview"><i class="fas fa-eye"></i> Visto:{{$propiedades['vista']}}</span>
            </div>
              <h3>{{$propiedades['titulo']}} - {{$propiedades['direccion']}}</h3>
              <div class="recorrido">
                <iframe src="http://visithouse.buhomedia.com.ar/tours/1/tour.html" width="" height=""></iframe>
                <!--
                <div id="pano" style="width:100%;height:100%;">
                  <noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
                  <script>
                    embedpano({swf:"{{route('/')}}/tours/1/tour.swf", xml:"{{route('/')}}/tours/1/tour.xml", target:"pano", html5:"auto", mobilescale:1.0, passQueryParameters:true});
                  </script>
                </div>
                -->

              </div>
              <div class="propietycaract row">
                <div class="col-lg-2">
                    <i class="fas fa-eye"></i>
                    Ambientes 2
                </div>
                <div class="col-lg-2">
                    <i class="fas fa-eye"></i>
                    Ambientes 2
                </div>
                <div class="col-lg-2">
                    <i class="fas fa-eye"></i>
                    Ambientes 2
                </div>
                <div class="col-lg-2">
                    <i class="fas fa-eye"></i>
                    Ambientes 2
                </div>
                <div class="col-lg-2">
                    <i class="fas fa-eye"></i>
                    Ambientes 2
                </div>
              </div>
              <div class="ubicacion">
                <h3>Ubicacion</h3>
                <p>{{$propiedades['direccion']}} , Microcentro, Capital Federal</p>
                <iframe width="95%" height="450"  frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/place?q={{$propiedades['direccion']}}&key=AIzaSyASRlQkkJPSVOJOQhgNZru739GwiVKaK9o" allowfullscreen></iframe>
              </div>
              <div class="propietydescrip">
                <p><strong>Descripcion:</strong> </p>
                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="propietydescrip">
                <p><strong>Carateristicas Generales:</strong> </p>
                <ul>
                  <li>Apto profesional</li>
                  <li>Wifi</li>
                  <li>Apto mascotas</li>
                  <li>Seguridad</li>
                </ul>
              </div>
              <div class="propietydescrip">
                <p><strong>Ambientes:</strong> </p>
                <ul>
                  <li>{{$propiedades['cant_dormitorio']}} Dormitorios</li>
                  <li>1 Cocina</li>
                  <li>{{$propiedades['cant_banio']}}  baño</li>
                  <li>1 Living</li>
                </ul>
              </div>
          </div>
        </div>
    </div>
    <div class="col-lg-4">
      <div class="contactform">
        <div class="row">
          <div class="col-lg-12 m-t-10 m-b-10">
            <h4>Contactá al anunciante</h4>
          </div>
          <div class="row col-lg-12 m-b-10">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-2">
              <img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt="">
            </div>
            <div class="col-lg-8 nopadding">
              Sandra Gimenez
            </div>
          </div>
          <div class="col-lg-12">

          {!! Form::open(['route' => 'contactos.store']) !!}
          @csrf
          {{--        <input name="_token" type="hidden" value="AT8wAHhJdIafrweXsVw2R6enJPD0byMOHsPQEvBW">--}}

          <!-- Propiedad Id Field -->
              <div style="display: none" class="form-group col-sm-6">
                  <label for="propiedad_id">Propiedad Id:</label>
                  <input class="form-control" name="propiedad_id" type="number" value="<?php echo $propiedades->id; ?>" id="propiedad_id">
              </div>

              <!-- User Id Field -->
              <div style="display: none" class="form-group col-sm-6">
                  <label for="user_id">User Id:</label>
                  <input class="form-control" name="user_id" type="number" value="0" id="user_id">
              </div>

              <!-- Nombre Field -->
              <div class="form-group col-sm-12">
                  <label for="nombre">Nombre:</label>
                  <input class="form-control" name="nombre" type="text" id="nombre" >
              </div>

              <!-- Email Field -->
              <div class="form-group col-sm-12">
                  <label for="email">Email:</label>
                  <input class="form-control" name="email" type="email" id="email">
              </div>

              <!-- Telefono Field -->
              <div class="form-group col-sm-12">
                  <label for="telefono">Telefono:</label>
                  <input class="form-control" name="telefono" type="text" id="telefono">
              </div>

              <!-- Comentario Field -->
              <div class="form-group col-sm-12 col-lg-12">
                  <label for="comentario">Comentario:</label>
                  <textarea class="form-control" name="comentario" cols="50" rows="10" id="comentario"></textarea>
              </div>

              <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  <input class="btn btn-primary" type="submit" value="Contactar">
              </div>

              {{--    </form>--}}
              {!! Form::close() !!}

{{--            <form class="" action="index.html" method="post">--}}
{{--              --}}
{{--            </form>--}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
