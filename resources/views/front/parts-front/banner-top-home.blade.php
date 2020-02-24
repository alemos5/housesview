<div class="bannerhome">
  <video class="dt-sc-video dt-sc-fillWidth"  playsinline autoplay muted loop  src="images/videobg.mp4"> </video>

  </video>
  <div class="container">
    <div class="row">
      <div class="col-lg-2">

      </div>
        <div class="col-lg-8">
          <form class="login-form" method="post" action="{{ route('resultado-busqueda-search') }}" id="login">
              @csrf
          <div class="bannercontent">
          <h3 class="text-center">¡Encontrá y visitá la proiedad de tus sueños <br> Desde cualquier parte del mundo. </h3>
            <div class="bigdatos row">
              <div class="col-lg-3 nopadding">
                <select class="" name="tipo_vivienda">
                  <option value="">Tipo de Operacion</option>
                  <option value="3"> Temporal</option>
                  <option value="2"> Alquilar</option>
                  <option value="1"> Vender</option>
                </select>
              </div>
              <div class="col-lg-6 nopadding">
                <input type="text" name="direccion" value="" placeholder="Buscar por localidad, direccion, etc..">
              </div>
              <div class="col-lg-3 nopadding">
                <input type="submit" name="" value="BUSCAR">
              </div>
            </div>
            <div class="smalldatos row">
              <div class="col-lg-2 nopadding">
              </div>
              <div class="col-lg-8 nopadding row">
                  <div class="col-lg-4 nopadding">
                    <select class="" name="tipo_inmueble">
                      <option value="">Tipo de Inmueble</option>
                      <option value="2"> Departamento</option>
                      <option value="3"> PH</option>
                      <option value="1"> CASA</option>
                    </select>
                  </div>
                  <div class="col-lg-4 nopadding">
                    <select class="" name="cant_ambiente">
                      <option value="">Ambientes</option>
                      <option value="1"> 1</option>
                      <option value="2"> 2</option>
                      <option value="3"> 3</option>
                    </select>
                  </div>
                  <div class="col-lg-4 nopadding">
                    <select class="" name="tipo_vendedor">
                      <option value="">Tipo de Vendedor</option>
                      <option value="2"> Inmobiliaria</option>
                      <option value="1"> Dueño directo</option>
                    </select>
                  </div>
              </div>
              <div class="col-lg-2 nopadding">
              </div>
            </div>
          </div>
          </form>
      </div>

      <div class="col-lg-2">

      </div>
    </div>
  </div>
</div>
