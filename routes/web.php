<?php

use App\Models\Theme;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/dashboard_themed', function () {

    return view('/dashboard/dashboard_themed');
});
Route::get('/themes', function () {
    $themes = Theme::all();
    return view('/themes', compact('themes'));
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

//website routes
Route::get('homepage',[App\Http\Controllers\PageController::class, 'index']);
Route::get('about',[App\Http\Controllers\PageController::class, 'about']);
Route::get('services',[App\Http\Controllers\PageController::class, 'services']);
Route::get('contact',[App\Http\Controllers\PageController::class, 'contact']);

//change between themes
Route::post('dashboard/theme/change/{id}',[App\Http\Controllers\PageController::class, 'themeChange']);
