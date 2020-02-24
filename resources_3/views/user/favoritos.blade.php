@extends('layouts.app')
@section('content')
<div class="bg-gray payment">
  <div class="container page">
    <h2 class="title">Tus Favoritos</h2>
    <div class="row">
      <div class="col-lg-12">
        <ul class="pageresultlist">
          <li>
            <div class="delete"> X</div>
            <a href="{{route('/')}}/propiety">
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
                          <h3>Tucumán 500.</h3>
                          <p>Microcentro, Capital Federal</p>
                        </div>
                      </div>
                      <ul class="datainfo">
                        <li><img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt=""></li>
                        <li>Ana Ferreira</li>
                        <li>  </li>
                        <li><i class="fas fa-eye"></i></li>
                        <li>Visto: 360</li>
                      </ul>
                      <ul class="dataprop">
                        <li><strong>Casa</strong> </li>
                        <li>Cuartos 2</li>
                        <li>Baños 2</li>
                        <li>160m2</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row dataprice nopadding">
                  <div class="col-lg-2">
                    <div class="price">
                      $500
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
          <!--end Prop-->
          <li>
            <div class="delete"> X</div>
            <a href="{{route('/')}}/propiety">
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
                          <h3>Tucumán 500.</h3>
                          <p>Microcentro, Capital Federal</p>
                        </div>
                      </div>
                      <ul class="datainfo">
                        <li><img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt=""></li>
                        <li>Ana Ferreira</li>
                        <li>  </li>
                        <li><i class="fas fa-eye"></i></li>
                        <li>Visto: 360</li>
                      </ul>
                      <ul class="dataprop">
                        <li><strong>Casa</strong> </li>
                        <li>Cuartos 2</li>
                        <li>Baños 2</li>
                        <li>160m2</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row dataprice nopadding">
                  <div class="col-lg-2">
                    <div class="price">
                      $500
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
          <!--end Prop-->
          <li>
            <!--start propiety-->
            <div class="delete"> X</div>
            <a href="{{route('/')}}/propiety">
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
                          <h3>Tucumán 500.</h3>
                          <p>Microcentro, Capital Federal</p>
                        </div>
                      </div>
                      <ul class="datainfo">
                        <li><img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt=""></li>
                        <li>Ana Ferreira</li>
                        <li>  </li>
                        <li><i class="fas fa-eye"></i></li>
                        <li>Visto: 360</li>
                      </ul>
                      <ul class="dataprop">
                        <li><strong>Casa</strong> </li>
                        <li>Cuartos 2</li>
                        <li>Baños 2</li>
                        <li>160m2</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row dataprice nopadding">
                  <div class="col-lg-2">
                    <div class="price">
                      $500
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
          <!--end Prop-->
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection
