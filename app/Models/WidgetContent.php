<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class WidgetContent
 * @package App\Models
 *  $table->string('title');
$table->text('description');
$table->string('source_link');
$table->string('content_image');
 */
class WidgetContent extends Model
{
    use HasFactory;
    protected $table = 'widget_contents';
    protected $fillable = [
        'title',
        'description',
        'source_link',
        'content_image',
        'widget_id',
        'website_id',
        'source_date',
        'start_time',
        'end_time',
        'bg_color',
        'font_color'
        ];

    public function widget()
    {
        return $this->hasOne(Widget::class,'id','widget_id');
    }
}
