@extends('layouts.app')
@section('content')
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
                  <img src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/user/12.jpg" alt="">
                </div>
                <h4 class="m-b-5">Maria A. McKnight</h4>
                <p class="mydata">Soy propietario de una casa, pueden verme y consultar sin nongun problema.</p>
                <hr>
                <div class="text-left">
                    <p class="mydata font-13"><strong>Nombre Completo :</strong> <span class="m-l-15">Maria McKnight</span></p>

                    <p class="mydata font-13"><strong>Celular :</strong><span class="m-l-15">(011)-15-1234-1234</span></p>

                    <p class="mydata font-13"><strong>Telefono :</strong><span class="m-l-15">(011)-1234-1234</span></p>

                    <p class="mydata font-13"><strong>Email :</strong> <span class="m-l-15">maria@gmail.com</span></p>

                    <p class="mydata font-13"><strong>Localidad :</strong> <span class="m-l-15">CABA</span></p>
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
                <form class="" action="index.html" method="post">
                  <div class="row form-group">
                    <div class="col-lg-3">
                      NOMBRE
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      APELLIDO
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      TELEFONO
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      CELULAR
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      EMAIL
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      HORARIO DE ATENCION
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      FACEBOOK
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-3">
                      WHATSTAPP
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="" value="">
                    </div>
                    <div class="col-lg-3">
                      <label for="hablilitar">Habilitar</label>
                      <input type="radio" name="wp" id="hablilitar" value="">
                      <label for="deshabilitar">deshabilitar</label>
                      <input type="radio" name="wp" id="deshabilitar" value="">
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
