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
    protected $table = 'widgets';
    protected $fillable = [
        'name',
        'widget_parent',
        'status_active',
        'position',
        'widget_level',
        'website_id'
    ];

    public function get_content($id)
    {
        $data = WidgetContent::where('widget_id',$id)->orderby('created_at','desc')->get();
        $count = WidgetContent::where('widget_id',$id)->count();
        return [$data,$count];
    }

    public function active_status($page, $widget)
    {
        $data = PageWidgets::where('page_id',$page)->where('widget_id',$widget)->first();
        if ($data)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
