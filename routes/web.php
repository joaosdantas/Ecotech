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

// Rotas cadastro
Route::get('/cadastrar', 'SiteController@cadastrar' )->name('cadastrar');




