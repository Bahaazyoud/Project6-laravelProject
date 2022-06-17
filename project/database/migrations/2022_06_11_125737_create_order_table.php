<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id_oner');
            $table->unsignedBigInteger('user_id_request');
            $table->unsignedBigInteger('book_id');

            $table->timestamps();

            $table->foreign('user_id_oner')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('user_id_request')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('book')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
