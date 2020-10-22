<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'theme_id',
        'menu_id',
        'admin_id'
    ];

    public function theme()
    {
        return $this->hasOne(Theme::class,'id','theme_id');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class,'id','menu_id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','admin_id');
    }

}
