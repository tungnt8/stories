<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('story_id');
            $table->string('title_story');
            $table->integer('chapter_id');
            $table->string('title_chapter');
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
        Schema::dropIfExists('history_stories');
    }
}
