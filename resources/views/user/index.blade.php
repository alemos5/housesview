@extends('layouts.app')
@section('content')

<?php
$cliente = \App\Clientes::where('id_cliente', Auth::user()->id_cliente)->first();
?>

<div class="bg-gray userindex">
  <div class="container page">
    <div class="">
      <div class="row col-lg-12">
        <h3>Perfil</h3>
      </div>
        <div class="card">
          <div class="row">
            <div class="col-lg-3 userdata">
              <div class="card">
                <div class="user-photo">
                  <img src="{{ $cliente->img }}" alt="">
                </div>
                <h4 class="m-b-5">{{ $cliente->nombre }}</h4>
                <p class="mydata">{{ $cliente->observacion }}</p>
                <hr>
                <div class="text-left">
                    <p class="mydata font-13"><strong>Nombre Completo :</strong> <span class="m-l-15">{{ $cliente->nombre }}</span></p>

                    <p class="mydata font-13"><strong>Celular :</strong><span class="m-l-15">{{ $cliente->telefono }}</span></p>

                    <p class="mydata font-13"><strong>Telefono :</strong><span class="m-l-15">{{ $cliente->fax }}</span></p>

                    <p class="mydata font-13"><strong>Email :</strong> <span class="m-l-15">{{ $cliente->email }}</span></p>

                    <p class="mydata font-13"><strong>Localidad :</strong> <span class="m-l-15">{{ $cliente->direccion }}</span></p>
                </div>
                <ul class="social-links list-inline m-t-30">
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                    </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-9 edituserdata">
              <div class="card">
                <h4 class="m-b-5">Editar tu perfil</h4>
                <hr>
                <form class="" action="clientes/update/<?php echo $cliente->id_cliente; ?>" method="post">
                    @csrf
                  <div class="row form-group">
                    <div class="col-lg-3">
                      NOMBRE
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="nombre" value="{{ $cliente->nombre }}">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      APELLIDO
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="apellido" value="{{ $cliente->apellido }}">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      TELEFONO
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="telefono" value="{{ $cliente->telefono }}">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      CELULAR
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="fax" value="{{ $cliente->fax }}">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      EMAIL
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="email" value="{{ $cliente->email }}">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      HORARIO DE ATENCION
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="horario_atencion" value="{{ $cliente->horario_atencion }}">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      FACEBOOK
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="facebook" value="{{ $cliente->facebook }}">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      WHATSTAPP
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="whatsapp" value="{{ $cliente->whatsapp }}">
                    </div>
                    <br>
                    <div class="col-lg-3">
                      <label for="hablilitar">Habilitar</label>
                      <input type="radio" name="estatus" id="hablilitar" value="1">
                      <label for="deshabilitar">deshabilitar</label>
                      <input type="radio" name="estatus" id="deshabilitar" value="0">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-9">
                      <input type="submit" name="" class="btn btn-success" value="GUARDAR">
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
