<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class SocialLink
 * @package App\Models
 *        $table->string('facebook')->nullable();
$table->string('instagram')->nullable();
$table->string('skype')->nullable();
$table->string('twitter')->nullable();
$table->string('pinterest')->nullable();
 */
class SocialLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'facebook',
        'instagram',
        'skype',
        'twitter',
        'youtube',
        'linkedin',
        'website_id'
    ];


}
