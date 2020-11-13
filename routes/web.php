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
});
Route::get('/theme-option', function () {
    return view('/theme-option');
});
    Route::get('/dashboard/block', function () {
        return view('/dashboard/block');
    });
    Route::get('/dashboard/setting', function () {
        $website = \App\Models\Website::where('admin_id',auth()->id())->first();
        $setting = \App\Models\WebsiteSetting::where('website_id',$website->id)->first();
        return view('/dashboard/setting',compact('setting'));
    });
    Route::get('/dashboard/settings_edit', function () {
        return view('/dashboard/settings_edit');
    });
Route::get('/custom-css', function () {
    return view('/custom-css');
});

Route::get('/main', function () {
    $active_theme = Theme::where('status_active',1)->first();
    $website = \App\Models\Website::where('admin_id',auth()->id())->first();
    if (!$active_theme)
    {
        $active_theme = Theme::findorfail(1);
    }
    return view('/main',compact('active_theme','website'));
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
Route::post('dashboard/website/setting',[\App\Http\Controllers\Backend\WebsiteController::class,'websiteSettings'])->name('dashboard.setting');

Route::get('home',[App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('about',[App\Http\Controllers\PageController::class, 'about']);
Route::get('services',[App\Http\Controllers\PageController::class, 'services']);
Route::get('contact',[App\Http\Controllers\PageController::class, 'contact']);
Route::get('events',[App\Http\Controllers\PageController::class, 'event']);
Route::get('blog',[App\Http\Controllers\PageController::class, 'blog']);
Route::get('event-detail',[App\Http\Controllers\PageController::class, 'eventDetail']);
Route::get('blog',[App\Http\Controllers\PageController::class, 'blog']);
Route::get('gallery',[App\Http\Controllers\PageController::class, 'gallery']);
Route::get('volunteer',[App\Http\Controllers\PageController::class, 'volunteer']);
Route::get('branches',[App\Http\Controllers\PageController::class, 'branches']);
Route::get('cause',[App\Http\Controllers\PageController::class, 'cause']);
Route::get('shop',[App\Http\Controllers\PageController::class, 'shop']);
Route::get('product_detail',[App\Http\Controllers\PageController::class, 'product_detail']);
Route::get('campaign',[App\Http\Controllers\PageController::class, 'campaign']);
Route::get('donate',[App\Http\Controllers\PageController::class, 'donate']);
Route::get('biography',[App\Http\Controllers\PageController::class, 'biography']);
Route::get('campaign_detail',[App\Http\Controllers\PageController::class, 'campaign_detail']);
Route::get('team',[App\Http\Controllers\PageController::class, 'team']);
Route::get('event',[App\Http\Controllers\PageController::class, 'event']);
Route::get('resident',[App\Http\Controllers\PageController::class, 'resident']);
Route::get('government',[App\Http\Controllers\PageController::class, 'government']);
Route::get('health',[App\Http\Controllers\PageController::class, 'health']);
Route::get('mayor',[App\Http\Controllers\PageController::class, 'mayor']);
Route::get('resident_detail',[App\Http\Controllers\PageController::class, 'resident_detail']);
Route::get('priorities',[App\Http\Controllers\PageController::class, 'priorities']);
Route::get('faq',[App\Http\Controllers\PageController::class, 'faq']);
Route::get('issue',[App\Http\Controllers\PageController::class, 'issue']);
Route::get('events_details',[App\Http\Controllers\PageController::class, 'events_details']);


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

