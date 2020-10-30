<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'theme_id',
        'status_active'
    ];

    public function menuitem()
    {
        return $this->hasMany(MenuItem::class,'id','menu_id');
    }


}
