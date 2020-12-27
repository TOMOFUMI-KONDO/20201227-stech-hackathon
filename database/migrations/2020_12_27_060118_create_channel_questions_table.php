<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_questions', function (Blueprint $table) {
            $table->integer('channel_id');
            $table->string('question');
            $table->timestamps();

//            $table->foreign('channel_id')->references('id')->on('channels');

            $table->unique(['channel_id', 'question']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel_questions');
    }
}
