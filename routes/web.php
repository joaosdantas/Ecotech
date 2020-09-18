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

//----------------CRUD

//Create Usuário
Route::get('cadastroPessoa', 'UsuarioController@create');
Route::post('cadastroPessoa', 'UsuarioController@store')->name('registrarUsuario');

//Read Usuário
Route::get('cadastroPessoa/ver/{id}', 'UsuarioController@show');

//Create Projeto
Route::get('cadastrarProjeto', 'ProjetoController@create');
Route::post('cadastrarProjeto', 'ProjetoController@store')->name('registrarProjeto');

//Read Projeto
Route::get('cadastroProjeto/ver/{id}', 'ProjetoController@show');

//Create Post
Route::get('publicarPost', 'PostController@create');
Route::post('publicarPost', 'PostController@store')->name('publicarPost');

//Read Post
Route::get('publicarPost/ver/{id}', 'PostController@show');







//----------------
// Rotas cadastro
Route::get('/cadastrar', 'SiteController@cadastrar' )->name('cadastrar');
Route::get('/cadastrar-projeto', 'SiteController@cadastroProjeto' )->name('cadastrar-projeto');
Route::get('/cadastro-pessoa-1', 'SiteController@cadastroPessoa' )->name('cadastro-pessoa-1');
Route::get('/cadastrarProjeto', 'SiteController@cadastrar8' )->name('cadastrarProjeto');

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
Route::post('/feed', 'SiteController@feed' )->name('registrarPost');


