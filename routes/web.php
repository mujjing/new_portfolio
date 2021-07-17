<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IOSController;
use App\Http\Controllers\JavaController;
use App\Http\Controllers\WebController;
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

Route::get('/', [HomeController::class, 'index'])->name('home_jp');
Route::get('/jp', [HomeController::class, 'index_jp']);
Route::get('/kr', [HomeController::class, 'index_kr'])->name('home_kr');
Route::get('/en', [HomeController::class, 'index_en'])->name('home_en');
Route::get('/jp/web', [WebController::class, 'web_jp'])->name('web_jp');
Route::get('/kr/web', [WebController::class, 'web_kr'])->name('web_kr');
Route::get('/en/web', [WebController::class, 'web_en'])->name('web_en');
Route::get('/jp/iOS', [IOSController::class, 'iOS_jp'])->name('iOS_jp');
Route::get('/kr/iOS', [IOSController::class, 'iOS_kr'])->name('iOS_kr');
Route::get('/en/iOS', [IOSController::class, 'iOS_en'])->name('iOS_en');
Route::get('/jp/java', [JavaController::class, 'java_jp'])->name('java_jp');
Route::get('/kr/java', [JavaController::class, 'java_kr'])->name('java_kr');
Route::get('/en/java', [JavaController::class, 'java_en'])->name('java_en');
