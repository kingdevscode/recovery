<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
    return view('auth.login');
});


//accueil coté client
Route::get('/accueil', function () {
    return view('accueil');
});
//détail d'un objet coté client
Route::get('/detail', function () {
    return view('detail');
});
//nous contacter coté client
Route::get('/contact', function () {
    return view('contact');
});



/*Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('layouts/apps');
});*/
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'user'], function () {

        Route::post('/', 'App\Http\Controllers\UserController@store');
        Route::get('/create', 'App\Http\Controllers\UserController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\UserController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\UserController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\UserController@show');
        Route::patch('/{id}', 'App\Http\Controllers\UserController@update');
        Route::get('/', 'App\Http\Controllers\UserController@index');
    });

    Route::group(['prefix' => 'agence'], function () {


        Route::post('/', 'App\Http\Controllers\AgenceController@store');
        Route::get('/create', 'App\Http\Controllers\AgenceController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\AgenceController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\AgenceController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\AgenceController@show');
        Route::patch('/{id}', 'App\Http\Controllers\AgenceController@update');
        Route::get('/', 'App\Http\Controllers\AgenceController@index');
    });

    Route::group(['prefix' => 'categorie'], function () {

        Route::post('/', 'App\Http\Controllers\CategorieController@store');
        Route::get('/create', 'App\Http\Controllers\CategorieController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\CategorieController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\CategorieController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\CategorieController@show');
        Route::patch('/{id}', 'App\Http\Controllers\CategorieController@update');
        Route::get('/', 'App\Http\Controllers\CategorieController@index');
    });
    Route::group(['prefix' => 'role'], function () {

        Route::post('/', 'App\Http\Controllers\RoleController@store');
        Route::get('/create', 'App\Http\Controllers\RoleController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\RoleController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\RoleController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\RoleController@show');
        Route::patch('/{id}', 'App\Http\Controllers\RoleController@update');
        Route::get('/', 'App\Http\Controllers\RoleController@index');
    });


    Route::group(['prefix' => 'suggestion'], function () {

        Route::post('/', 'App\Http\Controllers\SuggestionController@store');
        Route::get('/create', 'App\Http\Controllers\SuggestionController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\SuggestionController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\SuggestionController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\SuggestionController@show');
        Route::patch('/{id}', 'App\Http\Controllers\SuggestionController@update');
        Route::get('/', 'App\Http\Controllers\SuggestionController@index');
    });
    Route::group(['prefix' => 'objet'], function () {

        Route::post('/', 'App\Http\Controllers\ObjetController@store');
        Route::get('/create', 'App\Http\Controllers\ObjetController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\ObjetController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\ObjetController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\ObjetController@show');
        Route::patch('/{id}', 'App\Http\Controllers\ObjetController@update');
        Route::get('/', 'App\Http\Controllers\ObjetController@index');


        });

    Route::group(['prefix' => 'demande'], function () {

        Route::post('gh/', 'App\Http\Controllers\DemandeController@store');
        Route::get('/create', 'App\Http\Controllers\DemandeController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\DemandeController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\DemandeController@delete');
        Route::get('/{id}', 'App\Http\Controllers\DemandeController@show');
        Route::patch('/{id}', 'App\Http\Controllers\DemandeController@update');
        Route::get('/', 'App\Http\Controllers\DemandeController@index');

    });
    Route::group(['prefix' => 'signale'], function () {

        Route::post('gh/', 'App\Http\Controllers\SignaleController@store');
        Route::get('/create', 'App\Http\Controllers\SignaleController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\SignaleController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\SignaleController@delete');
        Route::get('/{id}', 'App\Http\Controllers\SignaleController@show');
        Route::patch('/{id}', 'App\Http\Controllers\SignaleController@update');
        Route::get('/', 'App\Http\Controllers\SignaleController@index');

    });
    Route::group(['prefix' => 'client'], function () {

        Route::post('gh/', 'App\Http\Controllers\ClientController@store');
        Route::get('/create', 'App\Http\Controllers\ClientController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\ClientController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\ClientController@delete');
        Route::get('/{id}', 'App\Http\Controllers\ClientController@show');
        Route::patch('/{id}', 'App\Http\Controllers\ClientController@update');
        Route::get('/', 'App\Http\Controllers\ClientController@index');

    });

    /*Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

});
    Auth::routes();
    Auth::routes(['register' => false]);

    Route::get('/home', [App\Http\Controllers\StatistiqueController::class, 'index'])->name('home');

