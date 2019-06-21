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

Route::get('/abonnements', function () {
    return view('abonnement.index');
});


Route::get('/', function () {
    return view('login');
});



 Auth::routes();

 Route::get('/default', function () {
    return view('default-content');
});
 Route::get('/reglements/list', 'ReglementController@list')->name('reglements.list'); //route pour l'affichage des datatables
 Route::get('/reglements/create', 'ReglementController@create')->name('reglements.create');
 Route::resource('reglements', 'ReglementController');

 Route::get('/clients/selectvillage', function () {
    return view('client.selectvillage');})->name('clients.selectvillage');
 //Route::get('/village', 'VillageController@index');


Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::resource('villages', 'VillageController');

Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::get('/clients/list', 'ClientController@list')->name('clients.list'); //route pour l'affichage des datatables
Route::resource('clients', 'ClientController');

Route::get('/consommations/list/{abonnement?}','ConsommationController@list')->name('consommations.list');//route pour consommation

Route::get('/abonnements/selectclient', function () {
    return view('abonnement.selectclient');})->name('abonnements.selectclient');
Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::get('/abonnements/show', 'AbonnementController@show')->name('abonnements.show');
Route::get('/abonnements/selectcompteur', 'AbonnementController@selectcompteur')->name('abonnements.selectcompteur');//route pour abonnement


//Route::get('/abonnements/selectclient', 'AbonnementController@selectclient')->name('abonnements.selectclient');//route pour abonnement





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
