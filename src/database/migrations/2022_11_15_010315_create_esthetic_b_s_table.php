<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstheticBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esthetic_b_s', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->unsignedBigInteger('esthetic_genre_id');
            $table->unsignedBigInteger('esthetic_part_id');
            $table->integer('plice');
            $table->timestamps();

            $table  ->foreign("esthetic_genre_id")
                    ->references("id")
                    ->on("esthetic_genres")
                    ->onDelete("cascade");

            $table  ->foreign("esthetic_part_id")
                    ->references("id")
                    ->on("esthetic_parts")
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
        Schema::dropIfExists('esthetic_b_s');
    }
}
