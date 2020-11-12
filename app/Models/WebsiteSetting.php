<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'website_id',
        'favicon',
        'brand_name',
        'brand_color',
        'logo_name',
    ];
}
