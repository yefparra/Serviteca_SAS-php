<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Principales
|-------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/demo', function () {
    return view('demo');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contactenos', function () {
    return view('contactenos');
});

/*
|--------------------------------------------------------------------------
| Base de Datos
|-------------------------------------------------------------------------
*/

Route::resource('BD', App\Http\Controllers\UsuarioController::class);

/*
|--------------------------------------------------------------------------
| CRUD
|-------------------------------------------------------------------------
*/

Route::resource('Rol', App\Http\Controllers\RolController::class);
Route::resource('Terceros',App\Http\Controllers\TercerosController::class);

/*
|--------------------------------------------------------------------------
| Recuperar Contraseña
|-------------------------------------------------------------------------
*/

Route::get('/recuperar', function () {
    return view('RecuperarContraseña.recuperar');
});


/*
|--------------------------------------------------------------------------
| Services Routes
|-------------------------------------------------------------------------
*/
Route::get('/Tickets', function () {
    return view('Ticket.index');
});

Route::get('/Compra', function () {
    return view('Productos.index');
});