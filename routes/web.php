<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

// 1. Halaman Home, menampilkan halaman awal website
Route::get('/', function (){
    return view ('home');
});

// // 2. Halaman Products menampilkan daftar product ( route prefix)
Route::prefix('category')->group(function () {
    Route::get('/list',function() {
        return view ('product');
    });
});

// 3. Halaman News menampilkan Daftar berita (route param)
Route::get('/news', [ArticleController::class, 'news']);
Route::get('/news/{string}', [ArticleController::class, 'newsString']);

// 4. Halaman Program menampilkan Daftar Program (route prefix)
Route::prefix('/program')->group(function () {
    Route::get('/{string}', function ($string) {
        return view('program', ['url' => $string]);
    });
});

// 5. Halaman About Us menampilkan About Us (route biasa)
Route::get('/about-us', [AboutController::class, 'about']);

// 6. Halaman Contact Us menampilkan Contact Us (route resource only)
Route::get('/contact-us', [ContactController::class, 'index']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
