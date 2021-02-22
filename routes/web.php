<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return "Halaman Home";
});


Route::prefix('Products')->group(function () {
    Route::get('/', [ProductsController::class, 'Products']);
    Route::get('/{id}', [ProductsController::class, 'Products']);    
});

Route::get('/news/{id}', function ($id) {
    return "Daftar berita".$id;
});

Route::prefix('Program')->group(function () {
    Route::get('/', [ProgramController::class, 'Program']);
    Route::get('/{id}', [ProgramController::class, 'Program']);    
});

Route::get('/About-Us', function () {
    return "https://www.educastudio.com/about-us";
});

Route::resource('contactus', ContactController::class);