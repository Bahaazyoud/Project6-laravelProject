<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id_oner');
            $table->unsignedBigInteger('user_id_request');
            $table->string('message');
            $table->timestamps();

            $table->foreign('user_id_oner')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('user_id_request')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat');
    }
}
