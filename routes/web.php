<?php


use Illuminate\Support\Facades\Auth;


Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

//    $cleardebugbar = Artisan::call('debugbar:clear');
  //  echo "Debug Bar cleared<br>";
});

Route::get('/', 'PropiedadesController@getPropiedadDestacadas')->name('/');
Route::get('propiedades/admin', 'PropiedadesController@indexAdmin')->name('propiedades-admin');
Route::post('/propiedades/uploadFile', 'PropiedadesController@uploadFiles')->name('uploadFile');

//Route::get('/', function(){
//    $titulopagina = 'Bivenidos a Casillero Express - Inicio';
//        return view('front.home', [
//            'titulopagina' => $titulopagina
//        ]);
//
//})->name('/');

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::get('loginpromocion', ['as' => 'loginfacebook', 'uses' => 'LoginController@showLoginFormfacebook']);
Route::post('login', ['as' => 'login.post', 'uses' => 'LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::get('logout', 'Auth\LoginController@logout');

Route::get('login/{service}', 'LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'LoginController@handleProviderCallback');

// Registration Routes...
Route::get('register', ['as' => 'register', function(){abort(499, 'Not available in demo mode.');}]);
Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register', ['as' => 'register.post', 'uses' => 'LoginController@register']);

// Password Reset Routes...
Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);


Route::group(['middleware' => 'auth'], function () {
	//Rutas soporte
	Route::get('/soporte', 'HomeController@soporte')->name('soporte');
	//Rutas de la plantilla
	Route::get('/dashboard', 'HomeController@dashboard')->name('home-one');
	Route::get('/home-two', 'HomeController@homeTwo')->name('home-two');
	Route::get('/stripe', 'HomeController@stripe')->name('stripe');
	//Rutas del perifl
	Route::get('/perfil', 'HomeController@perfil')->name('perfil');
	Route::post('/storeperfil','HomeController@storeperfil')->name('storeperfil');
	//Rutas de prealertas
	Route::get('/pre-alertas', 'PrealertaController@index')->name('pre-alertas');
	Route::get('/pre-alertas/mostrar/{id}', 'PrealertaController@mostrar')->name('prealertas-mostrar');
	Route::post('/pagostripe/{amount}', 'PaymentController@pagoStripe');
	Route::post('/pagostripepromo/{amount}', 'PaymentController@pagoStripePromo');
	Route::post('/cobro', 'StripeController@cobro');

	Route::post('/pagoenviopromo', 'PaymentController@pagoEnvioPromo')->name('pagoenviopromo');
	//Rutas de direcciones
	Route::get('/direcciones', function () {
				return view('direcciones.index');
			})->name('direcciones');

	//Rutas de Servicios Adicionales
	Route::get('/servicioadicional', function () {
			return view('servicioadicional.index');
		})->name('servicioadicional');

	//rutas de ordenes
	Route::get('/ordenes', 'OrderController@index')->name('ordenes');
	Route::get('/ordenes/mostrar/{id}', 'OrderController@mostrar')->name('ordenes-mostrar');
	Route::get('/ordenes/buscar', 'OrderController@buscar')->name('ordenes-buscar');

	//Rutas de programar envios
	Route::get('programar-envios','OrderController@programar')->name('programar-envios');
	Route::get('programar-ver','OrderController@ver')->name('programar-ver');

	Route::view('/checkoutfinish', 'checkout-finish');
	Route::view('/checkoutfinishe', 'checkout-finishe');
	Route::view('/checkoutfinishpromo', 'checkout-finishpromo');
	Route::get('/checkout/{usd}', 'PaymentController@checkout')->name('checkout');
	Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
	Route::post('/checkoutpromo', 'PaymentController@createPaymentPromo')->name('create-payment-promo');
	Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');
	Route::get('/confirmpromo', 'PaymentController@confirmPaymentpromo')->name('confirm-payment-promo');

	//Rutas de promoción
	Route::get('/promocion', 'HomeController@promocion')->name('promocion');

	//Rutas guia
	Route::get('/guia', 'GuiaController@index')->name('guia');

	//Rutas FacturacionDHL
	Route::get('/facturaciondhl', 'HomeController@facturaciondhl')->name('facturaciondhl');
	Route::get('/facturacioncomun', 'HomeController@facturacioncomun')->name('facturacioncomun');

});

Route::group(['middleware' => 'admin'], function () {
	//Rutas para los usuarios
	Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');
	Route::get('/listado-ordenes', 'OrderController@list')->name('listado-ordenes');
	Route::get('/promociones', function () {
				return view('promocion.index');
			})->name('promociones');

});

//Rutas del front
Route::get('/somos','SomosController@index')->name('somos');
Route::get('/politicas-privacidad/', function () { return view('front.politicas-privacidad');})->name('politicas-privacidad');
Route::get('/faq/', function () { return view('front.faq'); })->name('faq');
Route::get('/contacto/', function () { return view('front.contacto');})->name('contacto');
Route::get('/surcusales/', function () { return view('front.surcusales');})->name('surcusales');
Route::get('/servicios/', function () { return view('front.servicios');})->name('servicios');
Route::get('/includes/rastrear/', function () { return view('front.rastrear');})->name('rastrear');
Route::get('/calculadora/', function () { return view('front.calculadora');})->name('calculadora');
Route::get('/directorio/', function () { return view('front.directorio');})->name('directorio');

/*Ruta de buscador*/
// Route::get('/resultado-busqueda/', function(){return view('front.resultado-busqueda');})->name('resultado-busqueda');
Route::get('/resultado-busqueda/',  'PropiedadesController@index')->name('resultado-busqueda');
Route::post('/resultado-busqueda-search/',  'PropiedadesController@search')->name('resultado-busqueda-search');
Route::get('/resultado-busqueda-map/',  'PropiedadesController@map')->name('resultado-busqueda-map');
Route::post('/user/clientes/update/{id}',  'ClientesController@updateCliente')->name('update-cliente');

Route::get('/propiedad/{id}',  'PropiedadesController@show')->name('propiedad');

Route::resource('autors', 'autorController');


// Pagina de pago
Route::get('/payment', function(){return view('payment');})->name('payment');


// Pagina de perfil de usaurio
Route::get('/user/index', function(){
    return view('user.index');
})->name('index');

// Pagina de perfil de usaurio
Route::get('/user/publicate', function(){
    $ordenes = \App\Models\Ordenes::where('user_id', Auth::user()->id_cliente)->get();
    if (!$ordenes) {
        return view('payment');
    }else{
        $ordenes = \App\Models\Ordenes::where('user_id', Auth::user()->id_cliente)
            ->where('estatus', '0')->get();
						// echo count($ordenes); die();
        if (count($ordenes) < 0){
            return view('payment');
        }else{
            return view('user.publicate');
        }
    }
})->name('publicate');

// Pagina de favoritos
Route::get('/user/favoritos', function(){return view('user.favoritos');})->name('favoritos');

//Route::get('/favoritos/user', function(){return view('user.favoritos');})->name('favoritos-user');

Route::get('/favoritos/user',  'FavoritosController@user')->name('favoritos-user');
Route::get('/testMail',  'PropiedadesController@testMail')->name('testMail');

// Pagina de mis propiedades
Route::get('/user/mispropiedades', function(){return view('user.mispropiedades');})->name('mispropiedades');

// Pagina de buscar
Route::get('/buscar', function(){return view('buscar');})->name('buscar');

// Pagina de resumen de pago
Route::get('/payment-order', function(){ return view('payment-order'); })->name('payment-order');


Route::resource('provincias', 'ProvinciasController');
Route::post('/provincias/getLocalidad', 'ProvinciasController@getLocalidad');
Route::post('/provincias/getLocalidad', 'ProvinciasController@getLocalidad');

Route::resource('localidades', 'LocalidadesController');

Route::resource('propiedades', 'PropiedadesController');

Route::resource('propiedadEavValues', 'PropiedadEavValueController');

Route::resource('propiedadEavs', 'PropiedadEavsController');

Route::resource('propiedadGrupos', 'PropiedadGruposController');

Route::resource('planes', 'PlanesController');

Route::resource('planDuracions', 'PlanDuracionsController');

Route::post('/ordenes/storeAjax/',  'OrdenesController@storeAjax')->name('ordenes-storeAjax');
Route::post('/favoritos/addFavorito/',  'FavoritosController@addFavorito')->name('addFavorito');
Route::get('/payment-order-result', function(){ return view('payment-order-result'); })->name('payment-order-result');


Route::resource('ordenes', 'OrdenesController');


Route::resource('propiedadEavs', 'PropiedadEavsController');

Route::resource('favoritos', 'FavoritosController');


Route::resource('contactos', 'ContactosController');

Route::resource('contactos', 'ContactosController');

Route::resource('contactos', 'ContactosController');






/*Damian vista mapa */
//Rutas de direcciones
Route::get('/propiedadesmap', function () {return view('propiedades.propiedadesmap');})->name('propiedadesmap');


Route::resource('clientes', 'ClientesController');


Route::resource('clientes', 'ClientesController');
