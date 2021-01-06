<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToWidgetContents extends Migration
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
            $table->date('source_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
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
            $table->dropColumn('source_date');
            $table->dropColumn('start_time');
            $table->dropColumn('end_time');
        });
    }
}
