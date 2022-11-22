<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWormwoodASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wormwood_a_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wormwood_genre_id');
            $table->char('name');
            $table->integer('plice');
            $table->timestamps();

            $table  ->foreign("wormwood_genre_id")
                    ->references("id")
                    ->on("wormwood_genres")
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
        Schema::dropIfExists('wormwood_a_s');
    }
}
