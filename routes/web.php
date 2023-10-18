<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\SingleAction;
use App\Http\Controllers\PhotoController;




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

// Route::get('/home', function () {
//     return view('hello');
// });

Route::get('/home', function () {
    return view('frontend/index');
});
Route::get('/about', function () {
    return view('frontend/about');
});
Route::get('/blog', function () {
    return view('frontend/blog');
});
Route::get('/contact', function () {
    return view('frontend/contact');
});
Route::get('/course', function () {
    return view('frontend/course');
});

Route::get('/samp', function () {
    return view('samp');
});

// Route::get('/sample',[democontroller::class,'samp']);

// Route::get('/next',[democontroller::class,'next']);

Route::get('/sample',[SingleAction::class,'__invoke']);
// Route::get('/sam',[PhotoController::class,'index']);
Route::post('/posting',[democontroller::class,'posted']);


// Route::get('/next',[democontroller::class,'next']);

