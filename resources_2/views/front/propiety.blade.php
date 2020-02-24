@extends('layouts.app')
@section('content')
<div class="container page">
  <div class="row">
    <div class="col-lg-8">
        <div class="propietydetail">
          <div class="col-lg-12">
            <div class="tags">
              <span class="tagoperation">VENTA</span> <span class="tagdate">12/12/2020</span> <span class="tagview"><i class="fas fa-eye"></i> Visto: 500</span>
            </div>
              <h3>Tucumán 500, Microcentro, Capital Federal</h3>
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
                <p>Tucumán 500, Microcentro, Capital Federal</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.997438533023!2d-58.37391808477039!3d-34.60422628045927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33532ab7885c1%3A0xac89b76d3dec33c7!2sSarmiento%20347%2C%20C1041AAP%20CABA!5e0!3m2!1ses!2sar!4v1568835337776!5m2!1ses!2sar" width="95%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
                  <li>2 Dormitorios</li>
                  <li>1 Cocina</li>
                  <li>2 baño</li>
                  <li>1 Living</li>
                </ul>
              </div>
          </div>
        </div>
    </div>
    <div class="col-lg-4">
      <div class="contactform">
        <div class="row">
          <div class="col-lg-12">
            <h3>Contactar</h3>
          </div>
          <div class="row col-lg-12">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-2">
              <img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt="">
            </div>
            <div class="col-lg-8">
              Sandra Gimenez
            </div>
          </div>
          <div class="col-lg-12">
            <form class="" action="index.html" method="post">
              <input type="text" name="nombre" value="" placeholder="nombre">
              <input type="email" name="email" value="" placeholder="email">
              <input type="tel" name="telefono" value="" placeholder="telefono">
              <textarea name="name" rows="8" cols="80" placeholder="Mensaje"></textarea>
              <input type="button" name="" value="Enviar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
