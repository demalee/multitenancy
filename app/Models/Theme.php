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

    public function getActiveTheme()
    {
        $theme = $this->where('status_active',1)->first();
        if ($theme)
        {
            $theme_id = $theme->id;
        }
        else
        {
            $theme_id = 1;
        }
        return $theme_id;
    }
}
