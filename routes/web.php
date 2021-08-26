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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function() {
    // ADMIN
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {

        // HOME
        Route::get('/', 'HomeController@index')->name('home.index');

        // ESTADOS
        Route::prefix('estados')->name('estados.')->group(function() {
            Route::get('/', 'EstadoController@index')->name('index');
            Route::get('/cadastro', 'EstadoController@create')->name('create');
            Route::post('/', 'EstadoController@store')->name('store');
            Route::get('/{estado}', 'EstadoController@show')->name('show');
            Route::get('/{estado}/edicao', 'EstadoController@edit')->name('edit');
            Route::put('/{model}', 'EstadoController@update')->name('update');
            Route::delete('/{estado}', 'EstadoController@destroy')->name('destroy');
        });

        // FUNCIONARIOS
        Route::prefix('funcionarios')->name('funcionarios.')->group(function() {
        });

        // SECOES
        Route::prefix('secoes')->name('secoes.')->group(function() {
            Route::get('/', 'SecaoController@index')->name('index');
            Route::get('/{secao}', 'SecaoController@show')->name('show');
        });
    });
});
