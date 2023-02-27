<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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
//     return ('selamat datang');
// });
// Route::get('/about', function(){
//     return('Nim : 2141720094 - Nama : Rambimo Regeng Pangestu');
// });
// Route::get('/articles/{id}', function($id){
//     return('Halaman Artikel dengan ID ' . $id);
// });


// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'index2']);
// Route::get('/articles/{id}', [PageController::class, 'index3']);


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'index']);


// Route::get('/home', [ContohController::class, 'index']);

// Route::prefix('product')->group(function (){
//     Route::get('/list', [ContohController::class, 'product']);
// });

// Route::get('/news{page}', [ContohController::class, 'news']);

// Route::prefix('program')->group(function (){
//     Route::get('/list', [ContohController::class, 'program']);
// });

// Route::resource('contact', ContohController::class);


Route::get('/home', [HomeController::class, 'index']);

Route::prefix('home')->group(function (){
    Route::get('/product', [HomeController::class, 'product']);
});

Route::prefix('home')->group(function (){
    Route::get('/news', [HomeController::class, 'news']);
});

Route::prefix('home')->group(function (){
    Route::get('/program', [HomeController::class, 'program']);
});

Route::prefix('home')->group(function (){
    Route::get('/aboutus', [HomeController::class, 'aboutus']);
});

Route::prefix('home')->group(function (){
    Route::get('/contactus', [HomeController::class, 'contactus']);
});