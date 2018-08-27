<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
    
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('title', 100);
            $table->longText('summary');
            $table->string('feature_image', 300);
            $table->string('url', 150);
            $table->string('keywords', 100);
            $table->longText('description');
            $table->string('thumbnail', 300);
            $table->integer('source_id');
            $table->integer('author_id');
            $table->integer('poster_id');
            $table->integer('status'); // 0 dang phat hanh, 1 da hoan thanh
            $table->integer('is_hot'); // 0 hot, 1 new
            $table->bigInteger('view_count');
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
        Schema::dropIfExists('stories');
    }
}
