<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelongChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belong_channels', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('channel_id');
            $table->timestamps();

//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('channel_id')->references('id')->on('channels');

            $table->unique(['user_id', 'channel_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belong_channels');
    }
}
