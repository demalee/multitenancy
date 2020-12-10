<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class WebsiteUser
 * @package App\Models
 *  $table->integer('user_id');
$table->integer('website_id');
 */
class WebsiteUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'website_id'
    ];
}
