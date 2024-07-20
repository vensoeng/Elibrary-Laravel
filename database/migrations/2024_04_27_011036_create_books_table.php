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
        Schema::create('tbbook', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('descript');
            $table->string('length');
            $table->string('star');
            $table->unsignedBigInteger('range_id');
            $table->unsignedBigInteger('closet_id');
            $table->unsignedBigInteger('floor_id');
            $table->tinyInteger('popular')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('img');
            $table->timestamps();
        
            $table->foreign('range_id')->references('id')->on('tbrang');
            $table->foreign('closet_id')->references('id')->on('tbclosetnum');
            $table->foreign('floor_id')->references('id')->on('tbfloor');
        });
        
        // Add a raw SQL statement to enforce the check constraint
        DB::statement("ALTER TABLE tbbook ADD CONSTRAINT popular_status_check CHECK (popular IN (0, 1) AND status IN (0, 1))");        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
