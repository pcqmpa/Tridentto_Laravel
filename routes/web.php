<?php

use App\Municipio;

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

Route::get('/', 'MainController@home');
Route::get('/admin','AdminController@index');
Route::get('/carrito','ShoppingCartsController@index');
Route::get('/direccion','ShoppingCartsController@direccion');
Route::get('/pagar','ShoppingCartsController@pagarpedido');
Route::get('/ciudades/{id}',function($id){

    $ciudades = Municipio::where('departamento_id','=',$id )->get();

    return $ciudades;

});
Auth::routes();

Route::resource('categorias','CategoriasController');
Route::resource('productos','ProductosController');
Route::resource('terceros','TercerosController');
Route::resource('miperfil','PerfilUsuariosController',[
    'only' =>['index','store','update']
]);

Route::resource('in_shopping_carts','InShoppingCartsController',[
    'only' => ['store','destroy']
]);



Route::get('/home', 'HomeController@index');
