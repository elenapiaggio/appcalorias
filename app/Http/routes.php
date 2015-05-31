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

//if(Session::has('locale')){
//    App::setLocale(Session::get('locale'));
//}

//Route::get('idioma/{idioma}', array('uses' => 'IdiomasController@selecciona'));
//Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ],
    function()
    {
    Route::get('/', 'WelcomeController@index');
    Route::get('home', 'HomeController@index');
    Route::get('bienvenido', 'Admin\IndexController@index');

    // Rutas para Contacta
    Route::get('contacta', 'Admin\ContactaController@index');
    Route::get('quienessomos', 'Admin\ContactaController@quienessomos');

    // Rutas para Gastronomía
    Route::get('recetas', 'Admin\GastronomiaController@recetas');
    Route::get('noticias', 'Admin\GastronomiaController@noticias');
    Route::get('restaurantes', 'Admin\GastronomiaController@restaurantes');
    Route::get('trucos', 'Admin\GastronomiaController@trucos');



    Route::get('calcularkcal','Food\FoodsController@countCalories');
    Route::post('calcularkcal','Food\FoodsController@countCalories');


    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

    // CRUD para usuarios
    Route::group(
        ['prefix' => 'profile', 'namespace'=> 'User'],
          function(){
            Route::resource('form','UsersController');
        });

    // CRUD para Alimentos
    Route::group(
        ['prefix' => 'food', 'namespace'=> 'Food'],
        function(){
            Route::resource('list','FoodsController'); // por defecto me lleva a index
        });

    // CRUD para administrar Usuario
    Route::group(
        ['prefix' => 'admin', 'namespace'=> 'Admin'],
        function(){
            Route::resource('users','UsersController');
        });

    //Route::get('form','Profile\ProfilesController@index');
    //Route::get('form', 'Profile\ProfilesController@store');
    //Route::get('calcularkcal','User\CalcularKcalController@index');
    //Route::get('poblacion/{id}','PoblacionsController@show');
});

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('bienvenido', 'Admin\IndexController@index');

// Rutas para Contacta
Route::get('contacta', 'Admin\ContactaController@index');
Route::get('quienessomos', 'Admin\ContactaController@quienessomos');

// Rutas para Gastronomía
Route::get('recetas', 'Admin\GastronomiaController@recetas');
Route::get('noticias', 'Admin\GastronomiaController@noticias');
Route::get('restaurantes', 'Admin\GastronomiaController@restaurantes');
Route::get('trucos', 'Admin\GastronomiaController@trucos');



Route::get('calcularkcal','Food\FoodsController@countCalories');
Route::post('calcularkcal','Food\FoodsController@countCalories');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// CRUD para usuarios
Route::group(
    ['prefix' => 'profile', 'namespace'=> 'User'],
    function(){
        Route::resource('form','UsersController');
    });

// CRUD para Alimentos
Route::group(
    ['prefix' => 'food', 'namespace'=> 'Food'],
    function(){
        Route::resource('list','FoodsController'); // por defecto me lleva a index
    });

// CRUD para administrar Usuario
Route::group(
    ['prefix' => 'admin', 'namespace'=> 'Admin'],
    function(){
        Route::resource('users','UsersController');
    });

//Route::get('form','Profile\ProfilesController@index');
//Route::get('form', 'Profile\ProfilesController@store');
//Route::get('calcularkcal','User\CalcularKcalController@index');
//Route::get('poblacion/{id}','PoblacionsController@show');