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

    Route::get('/dashboard/pages/submenu/{id}', function () {

        return view('/dashboard/pages/submenu');
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
        $setting = \App\Models\WebsiteSetting::where('website_id',@$website->id)->first();
//        dd($setting);
        return view('/dashboard/setting',compact('setting'));
    });
    Route::get('/dashboard/settings_edit/{id}', function ($id) {
        $setting = \App\Models\WebsiteSetting::find($id);
        return view('/dashboard/settings_edit',compact('setting','id'));
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
          Route::get('/dashboard/widgets', function () {
              return view('/dashboard/widgets');

          });


    Route::get('/dashboard/submenu', function () {
        return view('/dashboard/submenu');

    });
    Route::get('/dashboard/social', function () {
        return view('/dashboard/social');

    });
    Route::get('/dashboard/dns', function () {
        return view('/dashboard/dns');

    });Route::get('/dashboard/users', function () {
        return view('/dashboard/users');

    });
});
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard/pages', [App\Http\Controllers\HomeController::class, 'pages'])->name('dashboard.pages');
Route::get('/dashboard/widgets_edit/{id}', [App\Http\Controllers\HomeController::class, 'editWidgets'])->name('dashboard.widgets_edit');
Route::get('/dashboard/website', [App\Http\Controllers\HomeController::class, 'steps'])->name('dashboard.website');

//website routes
Route::resource('websites',App\Http\Controllers\Backend\WebsiteController::class);
Route::post('dashboard/website/setting',[\App\Http\Controllers\Backend\WebsiteController::class,'websiteSettings'])->name('dashboard.setting');
Route::post('dashboard/website/setting/update/{id}',[\App\Http\Controllers\Backend\WebsiteController::class,'websiteSettingsUpdate'])->name('dashboard.setting');

Route::get('home',[App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('about',[App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('services',[App\Http\Controllers\PageController::class, 'services'])->name('services');;
Route::get('contact',[App\Http\Controllers\PageController::class, 'contact'])->name('contact');;
Route::get('events',[App\Http\Controllers\PageController::class, 'event'])->name('events');;
Route::get('blog',[App\Http\Controllers\PageController::class, 'blog'])->name('blog');;
Route::get('events_details',[App\Http\Controllers\PageController::class, 'eventDetail'])->name('events_details');;
Route::get('gallery',[App\Http\Controllers\PageController::class, 'gallery'])->name('gallery');
Route::get('volunteer',[App\Http\Controllers\PageController::class, 'volunteer'])->name('volunteer');;
Route::get('branches',[App\Http\Controllers\PageController::class, 'branches'])->name('branches');;
Route::get('cause',[App\Http\Controllers\PageController::class, 'cause'])->name('cause');;
Route::get('shop',[App\Http\Controllers\PageController::class, 'shop'])->name('shop');;
Route::get('product_detail',[App\Http\Controllers\PageController::class, 'product_detail'])->name('product_detail');;
Route::get('campaign',[App\Http\Controllers\PageController::class, 'campaign'])->name('campaign');;
Route::get('donate',[App\Http\Controllers\PageController::class, 'donate'])->name('donate');;
Route::get('biography',[App\Http\Controllers\PageController::class, 'biography'])->name('biography');;
Route::get('campaign_detail',[App\Http\Controllers\PageController::class, 'campaign_detail'])->name('campaign_detail');;
Route::get('team',[App\Http\Controllers\PageController::class, 'team'])->name('team');;
Route::get('event',[App\Http\Controllers\PageController::class, 'event'])->name('event');;
Route::get('resident',[App\Http\Controllers\PageController::class, 'resident'])->name('resident');;
Route::get('government',[App\Http\Controllers\PageController::class, 'government'])->name('government');;
Route::get('health',[App\Http\Controllers\PageController::class, 'health'])->name('health');;
Route::get('mayor',[App\Http\Controllers\PageController::class, 'mayor'])->name('mayor');;
Route::get('resident_detail',[App\Http\Controllers\PageController::class, 'resident_detail'])->name('resident_detail');;
Route::get('priorities',[App\Http\Controllers\PageController::class, 'priorities'])->name('priorities');;
Route::get('faq',[App\Http\Controllers\PageController::class, 'faq'])->name('faq');;
Route::get('issue',[App\Http\Controllers\PageController::class, 'issue'])->name('issue');;
Route::get('events_details',[App\Http\Controllers\PageController::class, 'events_details'])->name('events_details');;


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
Route::resource('dashboard/menus',App\Http\Controllers\Backend\MenuController::class);
Route::get('dashboard/submenus',[App\Http\Controllers\Backend\MenuController::class, 'subMenus']);
Route::get('dashboard/submenus/{id}',[App\Http\Controllers\Backend\MenuController::class, 'subMenu']);
Route::post('dashboard/submenus/{id}',[App\Http\Controllers\Backend\MenuController::class, 'editSubmenu']);
Route::resource('dashboard/widgets',App\Http\Controllers\Backend\WidgetsController::class);
Route::get('/dashboard/content/{widget}', [App\Http\Controllers\Backend\WidgetsController::class, 'content'])->name('content');
Route::post('/dashboard/content/add', [App\Http\Controllers\Backend\WidgetsController::class, 'addWidget'])->name('widgets.add_content');
Route::post('/dashboard/content/social-add', [App\Http\Controllers\Backend\WidgetsController::class, 'addSocialLinks'])->name('widgets.add_social_links');

