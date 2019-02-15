<?php

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

//Route::get('/', function () {
    //return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


// routes Front

Route::get('/', 'FrontController@index');

Route::get('/products', function() {
    return App\Product::all();
});

// route pour afficher un livre, route sécurisée
Route::get('product/{id}', 'FrontController@show')->where(['id' => '[0-9]+']);

Route::get('categorie/{id}', 'FrontController@productByCategorie')->where(['id'=>'[0-9]+']); // route homme/femme

Route::get('product/{code}' , 'FrontController@productBySale')->where(['code'=>'solde']);

Auth::routes(); // routes pour le login Laravel avec la commande php artisan make:auth

Route::resource('admin', 'ProductController')->middleware('auth');

