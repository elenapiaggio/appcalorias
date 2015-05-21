<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if(Session::has('locale')){
    App::setLocale(Session::get('locale'));
}

//Route::get('idioma/{idioma}', array('uses' => 'IdiomasController@selecciona'));
//Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(
    ['prefix' => 'profile', 'namespace'=> 'Profile'],
      function(){
        Route::resource('form','ProfilesController');
    });

Route::group(
    ['prefix' => 'food', 'namespace'=> 'Food'],
    function(){
        Route::resource('list','FoodsController'); // por defecto me lleva a index
    });

Route::get('calcularkcal','Food\FoodsController@countCalories');
Route::post('calcularkcal','Food\FoodsController@countCalories');




//Route::get('form','Profile\ProfilesController@index');
//Route::get('form', 'Profile\ProfilesController@store');
//Route::get('calcularkcal','User\CalcularKcalController@index');
//Route::get('poblacion/{id}','PoblacionsController@show');
