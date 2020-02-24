@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row ">
    <h3 class="m-t-10 m-b-10">Tus propiedades Favoritas: </h3><hr>
      <ul class="pageresultlist">
    <?php
    foreach ($favoritos as $destacado) {
    ?>
    <li>
      <!--start propiety-->
      <div class="delete"> X</div>
      <a href="{{route('/')}}/propiedad/{{$destacado['data'][0]->id}}">
        <!--start propiety-->
        <div class="propietythumb row">
          <div class="col-lg-6">
            <div class="imgprop">
              <img src="{{route('/')}}/images/prop/p1.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="viewthumb">

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
              </div>
            </div>
          </div>
          <div class="row dataprice nopadding">
            <div class="col-lg-2">
              <div class="price">
                  ${{ $destacado['data'][0]->precio }}
              </div>
            </div>
            <div class="col-lg-10">
              <ul>
                <li><i class="fas fa-home"></i></li>
                <li><i class="fas fa-home"></i></li>
                <li><i class="fas fa-home"></i></li>
                <li><i class="fas fa-home"></i></li>
                <li><i class="fas fa-home"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </a>
    </li>
    <?php
    }
    ?>
    </ul>
  </div>
</div>

@endsection
