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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', function () {
    return view('layouts/apps');
});
//Route::group(['middleware' => ['auth']], function () {
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


   /* Route::group(['prefix' => 'statut'], function () {

        Route::post('/', 'App\Http\Controllers\StatutController@store');
        Route::get('/create', 'App\Http\Controllers\StatutController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\StatutController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\StatutController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\StatutController@show');
        Route::patch('/{id}', 'App\Http\Controllers\StatutController@update');
        Route::get('/', 'App\Http\Controllers\StatutController@index');
    });
    Route::group(['prefix' => 'materiel'], function () {

        Route::post('/', 'App\Http\Controllers\MaterielController@store');
        Route::get('/create', 'App\Http\Controllers\MaterielController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\MaterielController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\MaterielController@destroy');
        Route::get('/{id}', 'App\Http\Controllers\MaterielController@show');
        Route::patch('/{id}', 'App\Http\Controllers\MaterielController@update');
        Route::get('/', 'App\Http\Controllers\MaterielController@index');
        Route::patch('/assigner/{id}', 'App\Http\Controllers\MaterielController@assigner');
        Route::get('u/', 'App\Http\Controllers\MaterielController@materiel_user');

        });

    Route::group(['prefix' => 'demande'], function () {

        Route::post('gh/', 'App\Http\Controllers\DemandeController@store');
        Route::get('/create', 'App\Http\Controllers\DemandeController@create');
        Route::get('/{id}/edit', 'App\Http\Controllers\DemandeController@edit');
        Route::delete('/delete/{id}', 'App\Http\Controllers\DemandeController@delete');
        Route::get('/{id}', 'App\Http\Controllers\DemandeController@show');
        Route::patch('/{id}', 'App\Http\Controllers\DemandeController@update');
        Route::get('/', 'App\Http\Controllers\DemandeController@index');
        Route::get('u/', 'App\Http\Controllers\DemandeController@demande_user');
        Route::patch('/valider/{id}', 'App\Http\Controllers\DemandeController@changer');
        Route::patch('/refuser/{id}', 'App\Http\Controllers\DemandeController@refuser');

    });


    /*Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

//});
    Auth::routes();
    Auth::routes(['register' => false]);

    Route::get('/home', [App\Http\Controllers\StatistiqueController::class, 'index'])->name('home');
