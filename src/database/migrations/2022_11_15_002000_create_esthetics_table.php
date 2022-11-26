<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstheticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esthetics', function (Blueprint $table) {
            $table->id();
            $table->char('name')->nullable(true);
            $table->unsignedBigInteger('esthetic_genre_id');
            $table->unsignedBigInteger('esthetic_part_id')->nullable(true);
            $table->integer('pliceA');
            $table->integer('pliceB')->nullable(true);
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
        Schema::dropIfExists('esthetics');
    }
}
