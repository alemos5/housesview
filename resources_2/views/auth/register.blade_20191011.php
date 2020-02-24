@extends('templates.application.master')

@section('layout-content')

<div id="main-wrapper">
    <section id="wrapper" class="login-register login-sidebar"  style="background-image:url(/vendor/wrappixel/material-pro/4.2.1/assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body" style="overflow-x: hidden; overflow-y:auto;">
                <form class="form-horizontal form-material" method="POST" action="{{ route('register') }}" onsubmit="return checkForm(this);">
                    @csrf
                    <a href="javascript:void(0)" class="text-center db">
                            <img src="{{asset('images/logo-web-casillero.jpg')}}" alt="Home" />
                    </a>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h3 class="box-title m-t-40 m-b-0">{{ __('Registro') }}</h3><small></small>
                
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="email" placeholder="Correo Electrónico" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>
             
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                  <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" name="terms" type="checkbox"  >
                                <label for="checkbox-signup"> Acepto los terminos y condiciones<a href="#"></a></label>
                              
                            </div>
                        </div>
                    </div> 
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">  {{ __('Registrar') }}</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>¿Ya posees una cuenta? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Inicia sesión</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
    <script>
            function checkForm(form)
            {
              if(!form.terms.checked) {
                alert("Por favor, acepta los terminos y condiciones");
                form.terms.focus();
                return false;
              }
              return true;
            }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script>

    var app2 = new Vue({
    el: '#main-wrapper',
    data () {
            return{
                itemsd: [],
                ciudades: [],
                paises: [],
                pais: '',
                 create_prealerta : {
                     nu_orden : null,
                     tienda: null,
                     descripcion : null,
                     doc: null,
                     valor: null,
                     tracking: null,
                     courier: null,
                     fecha: null,
                },
                 create_direccion : {
                     direccion : null,
                     id_cliente : null,
                     pais: null,
                     ciudad:'',
                },
            }   
        },
        mounted() {
           console.log('init');
            this.getVueItemsDireccion();
            
            this.getPais();
        },
      methods: {
        greet: function (event) {
         
          alert('Hello');
           },
           createPrealertaItem: function () {
                var input = {
                    nu_orden: this.create_prealerta.nu_orden,
                     tienda: this.create_prealerta.tienda,
                     descripcion: this.create_prealerta.descripcion,
                     doc: this.files,
                     valor: this.create_prealerta.valor,
                     tracking: this.create_prealerta.tracking,
                     courier: this.create_prealerta.courier,
                     fecha: $('#mdate').val(),
                     idc : $('#prealert_id_field').val(),
                }
                axios.post('/api/prealerta', 
                        input
                    ).then((response) => {
                    console.log(response);
                    this.create_prealerta = {
                     nu_orden : null,
                     tienda: null,
                     descripcion : null,
                     doc: null,
                     valor: null,
                     tracking: null,
                     courier: null,
                     fecha: null,
                    }
                });
             },
             /*Direcciones*/
             getVueItemsDireccion: function () {
                axios.get('/api/get/'+$('#id_cli').val()+'/direcciones').then((response) => {
                    this.itemsd = response.data;
                    console.log(this.itemsd);
                }).catch((error) => {
                    console.log(error);
                });
            },
            getPais: function () {
                axios.get('/api/get/paises').then((response) => {
                    this.paises = response.data;
                }).catch((error) => {
                    console.log(error);
                });
            },
            getCiudad: function () {
                axios.get('/api/get/'+this.pais +'/ciudades').then((response) => {
                    this.ciudades = response.data;
                }).catch((error) => {
                    console.log(error);
                });
            },
              createDireccionItem: function () {
                 var input = {
                    direccion: this.create_direccion.direccion,
                    id_cliente: $('#id_cli').val(),
                    id_pais: this.pais,
                    id_ciudad: this.create_direccion.ciudad,
                 };
                 axios.post('/api/direccion', input).then((response) =>  {
                    this.getVueItemsDireccion();
                    this.create_direccion = {
                        direccion: null,
                        id_cliente: null,
                        pais: null,
                        direccion: null,
                    }
                });
            },
             deleteDatosd: function (id) {
                if ( confirm('¿Estas seguro que deseas borrar esto?')) { 
                    axios.delete('/api/direccion/'+id).then((response) => {
                       this.getVueItemsDireccion();
                    });
                }
                
                  },
        }
});
</script>

@endsection
