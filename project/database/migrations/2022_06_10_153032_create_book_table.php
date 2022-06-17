<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default('0');
            $table->unsignedBigInteger('catigory_id');
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('publisher');
            $table->string('author');
            $table->string('book_image');
            $table->string('publishing_year');
            $table->string('state')->default('2');
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
             $table->foreign('catigory_id')->references('id')->on('catigory')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
