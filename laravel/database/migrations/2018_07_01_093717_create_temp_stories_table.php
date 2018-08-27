<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('category');
            $table->string('author');
            $table->longText('summary');
            $table->string('feature_image', 300);
            $table->string('url', 150);
            $table->string('source');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmp_stories');
    }
}
