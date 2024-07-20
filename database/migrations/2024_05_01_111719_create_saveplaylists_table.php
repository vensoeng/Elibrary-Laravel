<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbsaveplaylists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('playlist_id');
            $table->unsignedBigInteger('book_id');
            $table->timestamps();
            // Define foreign key constraints
            $table->foreign('playlist_id')->references('id')->on('tbplay')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('tbbook')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saveplaylists');
    }
};
