@extends('layouts.app')

@section('content')
<div class="loginpage">
  <div class="container page ">
      <div class="row">
        <div class="col-lg-4">
        </div>
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
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"> {{ __('Ingresar') }}</button>
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
                  <div class="row col-lg-12 socialincons">
                    <div class="col-lg-8">
                      <p>Ingresa con:</p>
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
                          <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class=""><b>Regsitrate ahora</b></a></p>
                      </div>
                  </div>
              </form>

            </div>
        </div>
      </div>
  </div>
</div>


@endsection
