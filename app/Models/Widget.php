<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Widget
 * @package App\Models
 *  $table->string('name');
$table->integer('theme_id');
$table->integer('widget_parent')->default(0);
$table->integer('status_active')->default(0);
$table->integer('position')->default(0);
$table->integer('widget_level')->default(0);
 */
class Widget extends Model
{
    use HasFactory;
    protected $table = ['widgets'];
    protected $fillable = [
        'name',
        'theme_id',
        'widget_parent',
        'status_active',
        'position',
        'widget_level',
    ];
}
