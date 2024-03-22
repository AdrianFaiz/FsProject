<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CContentController;
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
Route::get('/index', function () {
    return view('index');
});

Route::get('/system', [ContentController::class, 'index'])->name('system.index');

Route::get('/content', [CContentController::class, 'index'])->name('content.index');

Route::get('/index', [indexController::class, 'content'])->name('index.content');

Route::get('/', function () {
    return view('welcome');
});

