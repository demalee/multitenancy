<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
//    use HasFactory;
    protected  $connection = "mysql";
    protected $table = "themes";
    protected $fillable = ['status_active'];

}
