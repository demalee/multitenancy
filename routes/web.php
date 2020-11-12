<?php

use App\Models\Theme;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/',[App\Http\Controllers\PageController::class, 'index']);
Route::middleware(['auth'])->group(function () {

Route::get('/dashboard/dashboard_themed', function () {

    return view('/dashboard/dashboard_themed');
});
Route::get('/themes', function () {
    $themes = Theme::all();
    return view('/themes', compact('themes'));
});

Route::get('/Widgets', function () {
    return view('/widgets');
});Route::get('/theme-option', function () {
    return view('/theme-option');
});
Route::get('/custom-css', function () {
    return view('/custom-css');
});
    Route::get('/main', function () {
        return view('/main');
    })->name('home');
Route::get('/dashboard/pages/create', function () {
    return view('/dashboard/pages/create');

});
    Route::get('/dashboard/settings', function () {
        return view('/dashboard/settings');

    });
});
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard/pages', [App\Http\Controllers\HomeController::class, 'pages'])->name('dashboard.pages');
Route::get('/dashboard/website', [App\Http\Controllers\HomeController::class, 'steps'])->name('dashboard.website');

//website routes
Route::resource('websites',App\Http\Controllers\Backend\WebsiteController::class);
Route::get('home',[App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('about',[App\Http\Controllers\PageController::class, 'about']);
Route::get('services',[App\Http\Controllers\PageController::class, 'services']);
Route::get('contact',[App\Http\Controllers\PageController::class, 'contact']);
Route::get('events',[App\Http\Controllers\PageController::class, 'event']);
Route::get('blog',[App\Http\Controllers\PageController::class, 'blog']);
Route::get('event-detail',[App\Http\Controllers\PageController::class, 'eventDetail']);

//change between themes
Route::post('dashboard/theme/change/{id}',[App\Http\Controllers\PageController::class, 'themeChange']);
//pages controller
Route::resource('pages', App\Http\Controllers\Backend\PagesController::class);
Route::post('pages/image_upload', [App\Http\Controllers\Backend\PagesController::class, 'upload'])->name('upload');
//custom pages views
Route::get('{page}',function ($slug)
{
    $page = \App\Models\Page::findBySlug($slug);
    $route = Config::get('THEME_PAGES').'default';
    return view($route,compact('page'));
});

//menu controller
Route::resource('dashboard/menus',\App\Http\Controllers\Backend\MenuController::class);

