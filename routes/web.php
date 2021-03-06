<?php

use Illuminate\Support\Facades\Route;
use App\Http\Contollers\ArticleController;
use App\articles;
use Illuminate\Http\Request;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('articles', ArticleController::class);
Route::resource('articles', 'App\Http\Controllers\ArticleController');
//Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf'])->name('cetak_pdf');
Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');