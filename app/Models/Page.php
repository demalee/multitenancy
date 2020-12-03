<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Page extends Model
{
    use HasFactory;
    protected  $connection = "mysql";
    protected $table = "pages";
    protected $fillable = [
        'title',
        'slug',
        'page_description',
        'content',
        'theme_id',
        'parent_page',
        'page_level'
    ];

    public static function findBySlug($slug)
    {
        $theme_id = Config::get('THEME_ID');
        return Page::where('slug',$slug)->where('theme_id',$theme_id)->first();
    }

    public static function submenu_active($parent, $child)
    {
        $menu_item = MenuItem::where('parent_page_id',$parent)->where('page_id',$child)->first();
        if ($menu_item)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
