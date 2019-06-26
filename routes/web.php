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

/* Route::get('/compteurs', function () {
    return view('compteur.index');
});
 */

Route::get('/', function () {
    return view('default-content');
});

//AUTH

 Route::get('loginfor/{rolename?}',function($rolename=null){
    if(!isset($rolename)){
        return view('auth.loginfor');
    }else{
        $role=App\Role::where('name',$rolename)->first();
        if($role){
            $user=$role->users()->first();
            Auth::login($user,true);
            return redirect()->route('home');

        }
    }
 return redirect()->route('login');
 })->name('loginfor');

 Route::get('loginfor/{rolename?}',function($rolename=null){
    if(!isset($rolename)){
        return view('auth.loginfor');
    }else{
        $role=App\Role::where('name',$rolename)->first();
        if($role){
            $user=$role->users()->first();
            Auth::login($user,true);
            return redirect()->route('home');

        }
    }
 return redirect()->route('login');
 })->name('loginfor');


 Auth::routes();

 /* Route::get('/default', function () {
    return view('default-content');
}); */

//REGLEMENT
 Route::get('/reglements/list', 'ReglementController@list')->name('reglements.list'); //route pour l'affichage des datatables
 Route::get('/reglements/create', 'ReglementController@create')->name('reglements.create');
 Route::get('/reglements/store', 'ReglementController@store')->name('reglements.store');
 Route::resource('reglements', 'ReglementController');

//USER
Route::get('/users/list', 'UserController@list')->name('users.list');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::resource('users', 'UserController');

//VILLAGE
Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::resource('villages', 'VillageController');

//CLIENT
Route::get('/clients/selectvillage', function () {
    return view('client.selectvillage');})->name('clients.selectvillage');
 Route::get('/clients/create', 'ClientController@create')->name('clients.create');
 Route::get('/clients/list', 'ClientController@list')->name('clients.list'); //route pour l'affichage des datatables
 Route::resource('clients', 'ClientController');

 //CONSOMMATION
  Route::get('/consommations/list/{abonnement?}','ConsommationController@list')->name('consommations.list');//route pour consommation
  Route::get('/consommations/list', 'ConsommationController@list')->name('consommations.list');
 Route::resource('consommations', 'ConsommationController');

 //ABONNEMENT
 Route::get('/abonnements/selectclient', function () {
    return view('abonnement.selectclient');})->name('abonnements.selectclient');
Route::get('/abonnements/list', 'AbonnementController@list')->name('abonnements.list');
Route::get('/abonnements/show', 'AbonnementController@show')->name('abonnements.show');
Route::get('/abonnements/selectcompteur', 'AbonnementController@selectcompteur')->name('abonnements.selectcompteur');//route pour abonnement
Route::get('/abonnements/create', 'AbonnementController@create')->name('abonnements.create');
Route::resource('abonnements', 'AbonnementController');

//COMPTEUR
/*  Route::get('/compteurs/listfree', function () {
    return view('compteur.index');})->name('compteurs.listfree'); */
Route::get('/compteurs/listfree', 'CompteurController@listfree')->name('compteurs.listfree');
Route::resource('compteurs', 'CompteurController');

//CARBON
use Carbon\Carbon;

/* Route::get('carbon', function () {
   $date = Carbon::now();
   dump($date);
    $date->addDays(3);
   dump($date);
}); */

use Illuminate\Support\Facades\Date;

Route::get('carbon', function () {
   $date = Date::now();
   dump($date);
   $newDate = $date->copy()->addDays(7);
   dump($newDate);
});
