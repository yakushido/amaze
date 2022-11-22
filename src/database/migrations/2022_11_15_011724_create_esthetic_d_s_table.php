<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstheticDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esthetic_d_s', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->unsignedBigInteger('esthetic_genre_id');
            $table->integer('plice');
            $table->timestamps();

            $table  ->foreign("esthetic_genre_id")
                    ->references("id")
                    ->on("esthetic_genres")
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
        Schema::dropIfExists('esthetic_d_s');
    }
}
