<!--top top-->
<!--menu-->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
         <a href="{{route('/')}}/"> <img src="{{route('/')}}/images/logov1.png" alt="" class="logo"></a>
      </div>
      <div class="col-lg-9">
        <ul class="nav">
          <li><a href="{{route('/')}}/">Inicio</a> </li>
          <li><a href="{{route('/')}}/propiedades/admin">Propiedades</a> </li>
          <?php if($user = Auth::user())  { ?> <li><a href="{{route('/')}}/user/publicate">Publicar</a></li> <?php  }  ?>
          <?php if($user = Auth::guest())  { ?> <li>  <a href="{{route('/')}}/login">Publicar</a></li>  <?php  }  ?>
          <li><a href="{{route('/')}}/buscar">Buscar</a> </li>
          <li><a href="#">Contactanos</a> </li>
          <?php if($user = Auth::user())  { ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hola {{auth()->user()->nombre}} <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('/')}}/user/index">Mi Perfil</a></li>
                    <li><a href="{{route('/')}}/favoritos/user">Mis Favoritos</a></li>
                    <li><a href="{{route('/')}}/user/mispropiedades">Mis Propiedades</a></li>
                    <li><a href="{{route('/')}}/user/publicate">Publicar Propiedad</a></li>
                    <li><a href="{{route('/')}}/logout">Logout</a></li>
                  </ul>
                </li>
                <?php  }  ?>
                <?php if($user = Auth::guest())  { ?>
                    <li><a href="login">Iniciar Sesion /</a><a href="register">Registrase</a></li>
                <?php  }  ?>
        </ul>
      </div>
    </div>
  </div>
</div>
