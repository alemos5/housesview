<div class="destacadosemana">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title">
          <h2 class="float-left colorwhite">Destacados de la semana</h2>
      </div>
      </div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php
            foreach ($destacados as $destacado) {
                ?>
                  <div class="swiper-slide">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="destacadodata">
                          <h4>
                              {{ $destacado['data'][0]->titulo }}. {{ $destacado['data'][0]->direccion }}
                          </h4>
                          <p>Capital Federal</p>
                          <p><strong>Descripcion</strong> </p>
                          <p>
                            <ul>
                              <?php
                              foreach ($destacado['amenities'] as $amenity) {
                                  echo "<li>".$amenity->attribute.": ".$amenity->cantidad."&nbsp;</li>";
                              }
                              ?>
                          </ul>
                          </p>
                          <ul class="iconsemana">
                              <?php
                              foreach ($destacado['amenities'] as $amenity) {
                                  echo $amenity->icon;
                              }
                              ?>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-6">
                          <img src="{{route('/')}}//images/prop/p1.jpg" alt="">
                      </div>
                    </div>
                  </div>
                <?php
            }
          ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</div>






<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },
  });
</script>
