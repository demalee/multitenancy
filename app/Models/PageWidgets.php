<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageWidgets extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_id',
        'widget_id'
    ];

    public function widget()
    {
        return $this->hasOne(Widget::class);
    }

    public function page()
    {
        return $this->hasOne(Page::class);
    }
}
