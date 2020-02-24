<!--top top-->
<div class="bg-red">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-right">
                <?php if($user = Auth::user())  { ?>
                  <nav class="navbar navbar-default" role="navigation">
                    <ul class="navbar-nav navbar-right">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hola {{auth()->user()->nombre}} <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Mi Perfil</a></li>
                                <li><a href="#">Mis Favoritos</a></li>
                                <li><a href="#">Publicar Propiedad</a></li>
                                <li><a href="#">Logout</a></li>
                              </ul>
                            </li>
                          </ul>
                    </nav>
          <?php  }  ?>

          <?php if($user = Auth::guest())  { ?>
            <a href="login">Iniciar Sesion /</a><a href="register">Registrase</a>
          <?php  }  ?>


      </div>




    </div>
  </div>
</div>
<!--menu-->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
         <img src="{{route('/')}}/images/logov1.png" alt="" class="logo">
      </div>
      <div class="col-lg-8">
        <ul class="nav">
          <li><a href="#">INICIO</a> </li>
          <li><a href="#">PROPIEDADES</a> </li>
          <li><a href="#">PUBLICAR</a> </li>
          <li><a href="#">BUSCAR</a> </li>
          <li><a href="#">CONTACTANOS</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
