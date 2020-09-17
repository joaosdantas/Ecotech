<?php

use App\Http\Controllers\SiteController;
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

Route::get('/home', 'SiteController@home' )->name('Home');
Route::get('/oque-fazemos', 'SiteController@oQueFazemos' )->name('oQueFazemos');
Route::get('/quem-somos', 'SiteController@quemSomos' )->name('QuemSomos');
Route::get('/como-fazemos', 'SiteController@comoFazemos' )->name('comoFazemos');
Route::get('/entrar', 'SiteController@entrar' )->name('entrar');
Route::get('usuarios', 'UsuarioController@index');
Route::post('usuarios', 'UsuarioController@store')->name('registrarUsuario');

// Rotas cadastro
Route::get('/cadastrar', 'SiteController@cadastrar' )->name('cadastrar');
Route::get('/cadastrar-projeto', 'SiteController@cadastroProjeto' )->name('cadastrar-projeto');
Route::get('/cadastro-pessoa-1', 'SiteController@cadastroPessoa' )->name('cadastro-pessoa-1');

Route::get('/cadastro-etapa-1', 'SiteController@cadastrar1' )->name('cadastro-etapa-1');
Route::get('/cadastro-etapa-2', 'SiteController@cadastrar2' )->name('cadastro-etapa-2');
Route::get('/cadastro-etapa-3', 'SiteController@cadastrar3' )->name('cadastro-etapa-3');
Route::get('/cadastro-etapa-4', 'SiteController@cadastrar4' )->name('cadastro-etapa-4');
Route::get('/cadastro-etapa-5', 'SiteController@cadastrar5' )->name('cadastro-etapa-5');
Route::get('/cadastro-etapa-6', 'SiteController@cadastrar6' )->name('cadastro-etapa-6');
Route::get('/cadastro-etapa-7', 'SiteController@cadastrar7' )->name('cadastro-etapa-7');
Route::get('/cadastro-etapa-8', 'SiteController@cadastrar8' )->name('cadastro-etapa-8');

Route::get('/perfil', 'SiteController@perfil' )->name('Perfil');

Route::get('/feed', 'SiteController@feed' )->name('Feed');

