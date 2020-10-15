<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'theme_id'
    ];

    public static function findBySlug($slug)
    {
        return Page::where('slug',$slug)->first();
    }
}
