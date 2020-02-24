@extends('layouts.app')

@section('content')
<div class="loginpage">
  <div class="container page ">
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <div class="formlogin">
              <form class="form-horizontal form-material" method="POST" action="{{ route('register') }}" onsubmit="return checkForm(this);">
                  @csrf
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input id="nombre" placeholder="Nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required>
                      </div>
                  </div>

                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input id="email" placeholder="Correo Electrónico" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                      </div>
                  </div>

                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required>
                      </div>
                  </div>
                <div class="form-group">
                      <div class="col-md-12">
                          <div class="checkbox checkbox-primary p-t-0">
                              <input id="checkbox-signup" name="terms" type="checkbox"  >
                              <label for="checkbox-signup"> Acepto los terminos y condiciones<a href="#"></a></label>

                          </div>
                      </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">  {{ __('Registrar') }}</button>
                      </div>
                  </div>

                  <div class="row col-lg-12 socialincons">
                    <div class="col-lg-8">
                      <p>Registrate con:</p>
                    </div>
                    <div class="col-lg-2">
                      <i class="fab fa-facebook-square"></i>
                    </div>
                    <div class="col-lg-2">
                      <i class="fab fa-instagram"></i>
                    </div>
                  </div>
                  <div class="form-group m-b-0">
                      <div class="col-sm-12 text-center">
                          <p>¿Ya posees una cuenta? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Inicia sesión</b></a></p>
                      </div>
                  </div>
              </form>

            </div>
        </div>
      </div>
  </div>
</div>


@endsection
