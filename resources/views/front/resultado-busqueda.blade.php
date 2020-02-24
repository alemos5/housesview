@extends('layouts.app')
@section('content')
<div class="container page">
  <div class="row">
    <div class="col-lg-4">
      <div class="filters">
        <h4>Busqueda Avanzada</h4>
        <div class="">
          <input type="text" name="codigo" value="" placeholder="codigo">
        </div>
        <div class="">
          <input type="text" name="codigo" value="" placeholder="codigo">
        </div>
        <div class="">
          <select class="" name="tipocontrato">
            <option value="">Tipo de contrato</option>
            <option value="">Comprar</option>
            <option value="">Alquilar</option>
          </select>
        </div>
        <div class="">
          <input type="text" name="rangoprecio" value="Rango de precio">
        </div>
        <div class="">
          <input type="text" name="rangoprecio" value="Rango de precio">
        </div>
        <div class="">
          <select class="" name="ambientes">
            <option value="">Ambientes</option>
            <option value="">1</option>
            <option value="">2</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="pagination">
         <div class="row">
           <div class="col-lg-12">
             Paginas
           </div>
           <div class="col-lg-4">
             18 Resultados
           </div>
           <div class="col-lg-4">
             paginas < 1 2 3 >
           </div>
           <div class="col-lg-4">
             ordenar por: < <i class="fas fa-th-large"></i>  <i class="fas fa-stream"></i>  <i class="fas fa-map-marker-alt"></i>
           </div>
         </div>
      </div>
      <ul class="pageresultlist">
        <li>
          <a href="{{route('/')}}/propiety">
            <!--start propiety-->
            <div class="propietythumb row">
              <div class="col-lg-6">
                <div class="imgprop">
                  <img src="images/prop/p1.jpg" alt="">
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
                    <div class="row prodescrip">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <!--end Prop-->
        <li>
          <a href="{{route('/')}}/propiety">
            <!--start propiety-->
            <div class="propietythumb row">
              <div class="col-lg-6">
                <div class="imgprop">
                  <img src="images/prop/p1.jpg" alt="">
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
                    <div class="row prodescrip">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <!--end Prop-->
        <li>
          <!--start propiety-->
          <a href="{{route('/')}}/propiety">
            <!--start propiety-->
            <div class="propietythumb row">
              <div class="col-lg-6">
                <div class="imgprop">
                  <img src="images/prop/p1.jpg" alt="">
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
                    <div class="row prodescrip">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                  </div>
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
@endsection
