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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/','/login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function() {

    // ADMIN
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {

        // HOME
        Route::get('/', 'HomeController@index')->name('home.index');

        // CARGOS
        Route::prefix('cargos')->name('cargos.')->group(function() {
            Route::get('/', 'CargoController@index')->name('index');
            Route::get('/cadastro', 'CargoController@create')->name('create');
            Route::post('/', 'CargoController@store')->name('store');
            Route::get('/{cargo}', 'CargoController@show')->name('show');
            Route::get('/{cargo}/edicao', 'CargoController@edit')->name('edit');
            Route::put('/{cargo}', 'CargoController@update')->name('update');
            Route::delete('/{cargo}', 'CargoController@destroy')->name('destroy');
        });

        // ESTADOS
        Route::prefix('estados')->name('estados.')->group(function() {
            Route::get('/', 'EstadoController@index')->name('index');
            Route::get('/cadastro', 'EstadoController@create')->name('create');
            Route::post('/', 'EstadoController@store')->name('store');
            Route::get('/{estado}', 'EstadoController@show')->name('show');
            Route::get('/{estado}/edicao', 'EstadoController@edit')->name('edit');
            Route::put('/{estado}', 'EstadoController@update')->name('update');
            Route::delete('/{estado}', 'EstadoController@destroy')->name('destroy');
        });

        // FUNCIONARIOS
        Route::prefix('funcionarios')->name('funcionarios.')->group(function() {
            Route::get('/', 'FuncionarioController@index')->name('index');
            Route::get('/cadastro', 'FuncionarioController@create')->name('create');
            Route::post('/', 'FuncionarioController@store')->name('store');
            Route::get('/{funcionario}', 'FuncionarioController@show')->name('show');
            Route::get('/{funcionario}/edicao', 'FuncionarioController@edit')->name('edit');
            Route::put('/{funcionario}', 'FuncionarioController@update')->name('update');
            Route::delete('/{funcionario}', 'FuncionarioController@destroy')->name('destroy');
        });

        // MUNICIPIOS
        Route::prefix('municipios')->name('municipios.')->group(function() {
            Route::get('/', 'MunicipioController@index')->name('index');
            Route::get('/cadastro', 'MunicipioController@create')->name('create');
            Route::post('/', 'MunicipioController@store')->name('store');
            Route::get('/{municipio}', 'MunicipioController@show')->name('show');
            Route::get('/{municipio}/edicao', 'MunicipioController@edit')->name('edit');
            Route::put('/{municipio}', 'MunicipioController@update')->name('update');
            Route::delete('/{municipio}', 'MunicipioController@destroy')->name('destroy');
        });

        // ORGAOS
        Route::prefix('orgaos')->name('orgaos.')->group(function() {
            Route::get('/', 'OrgaoController@index')->name('index');
            Route::get('/cadastro', 'OrgaoController@create')->name('create');
            Route::post('/', 'OrgaoController@store')->name('store');
            Route::get('/{orgao}', 'OrgaoController@show')->name('show');
            Route::get('/{orgao}/edicao', 'OrgaoController@edit')->name('edit');
            Route::put('/{orgao}', 'OrgaoController@update')->name('update');
            Route::delete('/{orgao}', 'OrgaoController@destroy')->name('destroy');
        });

        // SECOES
        Route::prefix('secoes')->name('secoes.')->group(function() {
            Route::get('/', 'SecaoController@index')->name('index');
            Route::get('/{secao}', 'SecaoController@show')->name('show');
        });

        // SETORES
        Route::prefix('orgaos/{orgao}/setores')->name('orgaos.setores.')->group(function() {
            Route::get('/', 'SetorController@index')->name('index');
            Route::get('/cadastro', 'SetorController@create')->name('create');
            Route::post('/', 'SetorController@store')->name('store');
            Route::get('/{setor}', 'SetorController@show')->name('show');
            Route::get('/{setor}/edicao', 'SetorController@edit')->name('edit');
            Route::put('/{setor}', 'SetorController@update')->name('update');
            Route::delete('/{setor}', 'SetorController@destroy')->name('destroy');
        });

        // USUARIOS
        Route::prefix('usuarios')->name('usuarios.')->group(function() {
            Route::get('/', 'UsuarioController@index')->name('index');
            Route::get('/cadastro', 'UsuarioController@create')->name('create');
            Route::post('/', 'UsuarioController@store')->name('store');
            Route::get('/{usuario}', 'UsuarioController@show')->name('show');
            Route::get('/{usuario}/edicao', 'UsuarioController@edit')->name('edit');
            Route::put('/{usuario}', 'UsuarioController@update')->name('update');
            Route::delete('/{usuario}', 'UsuarioController@destroy')->name('destroy');
        });
    });

    // FUNCIONARIO
    Route::prefix('funcionario')->name('funcionario.')->namespace('Funcionario')->group(function() {
        // HOME
        Route::get('/', 'HomeController@index')->name('home.index');

        // COMUNICACOES INTERNAS
        Route::prefix('comunicacoes-internas')->name('comunicacoes-internas.')->group(function() {
            Route::get('/', 'ComunicacaoInternaController@index')->name('index');
        });

        // DADOS PESSOAIS
        Route::prefix('dados-pessoais')->name('dados-pessoais.')->group(function() {
            Route::get('/', 'DadoPessoalController@index')->name('index');
            // Route::get('/cadastro', 'FuncionarioController@create')->name('create');
            // Route::post('/', 'FuncionarioController@store')->name('store');
        });
    });
});
