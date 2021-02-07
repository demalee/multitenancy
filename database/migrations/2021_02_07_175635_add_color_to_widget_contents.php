<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorToWidgetContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('widget_contents', function (Blueprint $table) {
            //
            $table->string('bg_color')->nullable();
            $table->string('font_color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('widget_contents', function (Blueprint $table) {
            //
            $table->dropColumn('bg_color');
            $table->dropColumn('font_color');
        });
    }
}
