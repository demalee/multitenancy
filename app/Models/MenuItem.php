<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuItem
 * @package App\Models
 *    $table->integer('menu_id');
$table->string('menu');
$table->string('page_id');
$table->integer('parent_id')->default(0);
$table->string('slug');
 */

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'menu',
        'page_id',
        'parent_id',
        'slug',
        'menu_position'
    ];

    public function menu()
    {
        return $this->hasOne(Menu::class,'id','menu_id');
    }

    public function page()
    {
        return $this->hasOne(Page::class,'id','page_id');
    }
}
