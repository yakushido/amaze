<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNailCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nail_c_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nail_genre_id');
            $table->char('name');
            $table->integer('plice_A');
            $table->integer('plice_B')->nullable(true);
            $table->timestamps();

            $table  ->foreign("nail_genre_id")
                    ->references("id")
                    ->on("nail_genres")
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
        Schema::dropIfExists('nail_c_s');
    }
}
