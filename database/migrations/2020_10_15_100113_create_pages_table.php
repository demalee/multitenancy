<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->text('page_description');
            $table->foreignId('theme_id');
            $table->integer('parent_page')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *'title'=>$data['name'],
    'slug'=>Str::slug($data['name']),
    'page_description'=>$data['description'],
    'content'=>$data['content'],
    'theme_id
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
