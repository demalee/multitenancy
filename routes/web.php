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

Route::get('/dashboard/dashboard_themed', function () {
    return view('/dashboard/dashboard_themed');
});
Route::get('/themes', function () {
    return view('/themes');
});

Route::get('/menus', function () {
    return view('/menus');
});
Route::get('/Widgets', function () {
    return view('/widgets');
});Route::get('/theme-option', function () {
    return view('/theme-option');
});
Route::get('/custom-css', function () {
    return view('/custom-css');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
