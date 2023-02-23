<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//1
Route::get('/', HomeController::class);

//2
Route::get('/product', function () {
    echo "Menampilkan daftar product (klik salah satu) :<br>
    <a href='http://127.0.0.1:8000/products/1'>1. Marbel Edu Games</a><br>
    <a href='http://127.0.0.1:8000/products/2'>2. Marbel And Friends Kids Games</a><br>
    <a href='http://127.0.0.1:8000/products/3'>3. Riri Story Books</a><br>
    <a href='http://127.0.0.1:8000/products/4'>4. Kolak Kids Songs</a><br><br><br>";
});
Route::prefix('/products')->group(function () {
    Route::get('/1', function () {return redirect('https://www.educastudio.com/category/marbel-edu-games');});
    Route::get('/2', function () {return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');});
    Route::get('/3', function () {return redirect('https://www.educastudio.com/category/riri-story-books');});
    Route::get('/4', function () {return redirect('https://www.educastudio.com/category/kolak-kids-songs');});
});

//3
Route::prefix('news')->group(function () {
    Route::get('/', function () {
        return redirect("https://www.educastudio.com/news");
    });

    // Route Params
    Route::get('/{url}', function ($url) {
        return redirect("https://www.educastudio.com/news/$url");
    });
});

//4
Route::get('/program', function () {
    echo "Menampilkan daftar program (klik salah satu) :<br>
    <a href='http://127.0.0.1:8000/programs/1'>1. Karir</a><br>
    <a href='http://127.0.0.1:8000/programs/2'>2. Magang</a><br>
    <a href='http://127.0.0.1:8000/programs/3'>3. Kunjungan Industri</a><br>";
});
Route::prefix('/programs')->group(function () {
    Route::get('/1', function () {return redirect('https://www.educastudio.com/program/karir');});
    Route::get('/2', function () {return redirect('https://www.educastudio.com/program/magang');});
    Route::get('/3', function () {return redirect('https://www.educastudio.com/program/kunjungan-industri');});
});

//5
Route::get('/about', AboutController::class);

//6
Route::resource('/contact-us', ContactController::class)->only('index');
Route::get('/contact', [ContactController::class, 'form']);
Route::post('/contact', [ContactController::class, 'store']);
