<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class RoleUser
 * @package App\Models
 *        $table->integer('user_id');
$table->integer('role_id');
 */
class RoleUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'role_id'
    ];


}
