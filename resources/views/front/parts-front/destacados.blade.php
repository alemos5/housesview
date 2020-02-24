<div class="bg-gray">
  <div class="container">
    <div class="featured">
      <div class="title">
          <h2 class="float-left">Propiedades destacadas</h2>
      </div>
      <div class="featuredpropieties">

        <ul class="listprop">

            <?php
//            $destacados = \App\Http\Controllers\PropiedadesController::getPropiedadDestacadas(1, 3);
//            echo json_encode($destacados);
//            die();
            foreach ($destacados as $destacado) {
//                echo json_encode($destacado['data'][0]->id)."<hr>";

            ?>
                <li>
                  <a href="{{route('/')}}/propiedad/{{$destacado['data'][0]->id}}">
                    <!--start propiety-->
                    <div class="propietythumb">
                        <div class="imgprop">
                            <img src="images/prop/p1.jpg" alt="">
                        </div>
                        <div class="viewthumb">
                            <div class="row dataprice ">
                                <div class="col-lg-3">
                                    <div class="price">
                                        ${{ $destacado['data'][0]->precio }}
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul>
                                        <?php
                                        foreach ($destacado['amenities'] as $amenity) {
                                            echo $amenity->icon;
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="datacolor">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>{{ $destacado['data'][0]->titulo }}</h3>
                                        <p>{{ $destacado['data'][0]->direccion }}</p>
                                    </div>
                                </div>
                                <ul class="datainfo">
                                    <li><img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt=""></li>
                                    <li>{{ $destacado['data'][0]->nombre }}</li>
                                    <li>  </li>
                                    <li><i class="fas fa-eye"></i></li>
                                    <li>Visto: {{ $destacado['data'][0]->vista }}</li>
                                </ul>
                                <ul class="dataprop">
                                    <li><strong>Casa</strong> </li>
                                    <li>Cuartos {{$destacado['data'][0]->cant_dormitorio}} - </li>
                                    <li>Baños {{$destacado['data'][0]->cant_banio}} - </li>
                                    <li>{{$destacado['data'][0]->metros}}m²</li>
                                    <?php
                                    foreach ($destacado['amenities'] as $amenity) {
                                        echo "<li>".$amenity->attribute.": ".$amenity->cantidad."&nbsp;</li>";
                                    }
                                    ?>
                                </ul>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                  </a>
                </li>
                <?php
            }
//            die();
            ?>
          <!--end Prop-->
        </ul>


        <!--end Prop-->
      </div>
    </div>
  </div>
</div>
