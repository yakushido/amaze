<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nails', function (Blueprint $table) {
            $table->id();
            $table->char('name')->nullable(true);
            $table->unsignedBigInteger('nail_genre_id');
            $table->unsignedBigInteger('nail_part_id')->nullable(true);
            $table->integer('pliceA');
            $table->integer('pliceB')->nullable(true);
            $table->timestamps();

            $table  ->foreign("nail_genre_id")
                    ->references("id")
                    ->on("nail_genres")
                    ->onDelete("cascade");

            $table  ->foreign("nail_part_id")
                    ->references("id")
                    ->on("nail_parts")
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
        Schema::dropIfExists('nails');
    }
}
