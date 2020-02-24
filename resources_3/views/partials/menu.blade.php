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
                                <li><a href="{{route('/')}}/user/index">Mi Perfil</a></li>
                                <li><a href="{{route('/')}}/user/favoritos">Mis Favoritos</a></li>
                                <li><a href="{{route('/')}}/user/mispropiedades">Mis Propiedades</a></li>
                                <li><a href="{{route('/')}}/user/publicate">Publicar Propiedad</a></li>
                                <li><a href="{{route('/')}}/logout">Logout</a></li>
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
         <a href="{{route('/')}}/"> <img src="{{route('/')}}/images/logov1.png" alt="" class="logo"></a>
      </div>
      <div class="col-lg-8">
        <ul class="nav">
          <li><a href="{{route('/')}}/">INICIO</a> </li>
          <li><a href="{{route('/')}}/resultado-busqueda">PROPIEDADES</a> </li>
          <?php if($user = Auth::user())  { ?> <li><a href="{{route('/')}}/user/publicate">PUBLICAR</a></li> <?php  }  ?>
          <?php if($user = Auth::guest())  { ?> <li>  <a href="{{route('/')}}/login">PUBLICAR</a></li>  <?php  }  ?>
          <li><a href="{{route('/')}}/buscar">BUSCAR</a> </li>
          <li><a href="#">CONTACTANOS</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
