<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepilationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depilations', function (Blueprint $table) {
            $table->id();
            $table->char('name')->nullable(true);
            $table->unsignedBigInteger('depilation_genre_id');
            $table->unsignedBigInteger('depilation_part_id')->nullable(true);
            $table->integer('pliceA');
            $table->integer('pliceB')->nullable(true);
            $table->timestamps();

            $table  ->foreign("depilation_genre_id")
                    ->references("id")
                    ->on("depilation_genres")
                    ->onDelete("cascade");

            $table  ->foreign("depilation_part_id")
                    ->references("id")
                    ->on("depilation_parts")
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
        Schema::dropIfExists('depilations');
    }
}
