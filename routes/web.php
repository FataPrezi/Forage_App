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
/*
Route::get('/', function () {
    return view('layout.default');
});
*/
 Route::get('/', function () {
    return view('default-content');
});


 Auth::routes();

 Route::get('/clients/selectvillage', function () {
    return view('client.selectvillage');})->name('clients.selectvillage');


 //Route::get('/village', 'VillageController@index');

Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::resource('villages', 'VillageController');

Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::get('/clients/list', 'ClientController@list')->name('clients.list'); //route pour l'affichage des datatables
Route::resource('clients', 'ClientController');


//Route::get('/clients/create', 'ClientController@create')->name('clients.create');

//Route::resource('/clients/create', 'ClientController');


/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('villages', 'VillageController'); */

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/test', function () {
    return view('layout.form');
}); */

/* Route::get('/test1', function () {
    return "HELLO";
}); */


/*Route::get('/home', 'HomeController@index')->name('home');*/

/*Route::resource('Village', 'VillageController');*/
