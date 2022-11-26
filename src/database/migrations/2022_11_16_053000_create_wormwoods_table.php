<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWormwoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wormwoods', function (Blueprint $table) {
            $table->id();
            $table->char('name')->nullable(true);
            $table->unsignedBigInteger('wormwood_genre_id');
            $table->unsignedBigInteger('wormwood_part_id')->nullable(true);
            $table->integer('pliceA');
            $table->integer('pliceB')->nullable(true);
            $table->timestamps();

            $table  ->foreign("wormwood_genre_id")
                    ->references("id")
                    ->on("wormwood_genres")
                    ->onDelete("cascade");

            $table  ->foreign("wormwood_part_id")
                    ->references("id")
                    ->on("wormwood_parts")
                    ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wormwoods');
    }
}
