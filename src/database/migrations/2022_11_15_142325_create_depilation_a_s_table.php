<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepilationASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depilation_a_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('depilation_genre_id');
            $table->char('name');
            $table->integer('plice');
            $table->timestamps();

            $table  ->foreign("depilation_genre_id")
                    ->references("id")
                    ->on("depilation_genres")
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
        Schema::dropIfExists('depilation_a_s');
    }
}
