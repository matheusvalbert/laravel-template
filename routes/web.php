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

Auth::routes();


Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perfil/{id}', [App\Http\Controllers\UserControllers::class, 'show']);

Route::get('/cursos/{id}', [App\Http\Controllers\CursosController::class, 'show']);

Route::get('/requisicao', function () {
    $json = \Illuminate\Support\Facades\Http::get('https://learn-laravel.cf/movie/1')->body();
    dd($json);
});