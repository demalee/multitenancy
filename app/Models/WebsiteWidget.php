<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WebsiteWidget
 * @package App\Models
 *    $table->integer('website_id');
$table->integer('page_id');
$table->integer('widget_id');
 */
class WebsiteWidget extends Model
{
    use HasFactory;
    protected $table = 'website_widgets';
    protected $fillable = [
        'website_id',
        'page_id',
        'widget_id',
    ];

    public function website()
    {
        return $this->hasOne(Website::class);
    }

    public function page()
    {
        return $this->hasOne(Page::class);
    }

    public  function widget()
    {
        return $this->hasOne(Widget::class);
    }
}
