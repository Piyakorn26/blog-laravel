<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

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

Route::get('/blog', function () {
  return view('frontend.blog');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('welcome');
});

//ใช้ดึงดาต้าเบสได้
Route::get('/user', [BlogController::class, 'onLoadPage']);

Route::get('/blogs', [BlogController::class, 'onLoadBlogs']);

Route::get('/welcome',[BlogController::class,'index']);
