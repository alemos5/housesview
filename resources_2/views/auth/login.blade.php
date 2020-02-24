@extends('layouts.app')

@section('content')
<div class="loginpage">
  <div class="container page ">
      <div class="row">
        <div class="col-lg-4">
            <div class="formlogin">
              <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group m-t-40">
                       @if(Session::has('error'))
                     <div class="alert alert-danger">
                      {{Session::get('error')}}
                     </div>
                  @endif
                      <div class="col-xs-12">
                          <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-12">
                        {{--   <div class="checkbox checkbox-primary pull-left p-t-0">
                              <input id="checkbox-signup" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                              <label for="checkbox-signup"> {{ __('Remember Me') }} </label>
                          </div> --}}
                          <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> {{ __('¿Olvidaste tu contraseña?') }}</a> </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"> {{ __('Ingresar') }}</button>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                          <div class="social"><a href="https://app.efectylogistic.com/login/facebook" class="btn  btn-facebook" data-toggle="tooltip" title="Ingresar con Facebook"> <i aria-hidden="true" class="fab fa-facebook"></i> </a> <a href="https://app.efectylogistic.com/login/google" class="btn btn-googleplus" data-toggle="tooltip" title="Ingresar con google
                              "> <i aria-hidden="true" class="fab fa-google-plus"></i> </a> </div>
                      </div>
                  </div>

                 {{--  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                          <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus"></i> </a> </div>
                      </div>
                  </div> --}}
                  <div class="form-group m-b-0">
                      <div class="col-sm-12 text-center">
                          <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Regsitrate ahora</b></a></p>
                      </div>
                  </div>
              </form>
              <!-- <form class="form-horizontal" id="recoverform" method="POST" action="{{ route('password.email') }}">
                  @csrf
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <h3>{{ __('Resetear contraseña') }}</h3>
                          <p class="text-muted">Ingresa tu correo y te enviaremos las instrucciones</p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input id="emailRecover" type="email" placeholder="Email"  class="form-control" name="email"  required>
                      </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"> {{ __('Enviar enlace para restaurar contraseña') }}</button>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-12">
                          <a href="javascript:void(0)" id="back-to-login" class="text-dark pull-right">
                              <i class="fa fa-backward m-r-5"></i>
                              Volver al inicio
                          </a>
                      </div>
                  </div>
              </form> -->
            </div>
        </div>
      </div>
  </div>
</div>


@endsection
