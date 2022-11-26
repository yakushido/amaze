<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEyelashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eyelashes', function (Blueprint $table) {
            $table->id();
            $table->char('name')->nullable(true);
            $table->unsignedBigInteger('eyelash_genre_id');
            $table->unsignedBigInteger('eyelash_part_id')->nullable(true);
            $table->integer('pliceA');
            $table->integer('pliceB')->nullable(true);
            $table->timestamps();

            $table  ->foreign("eyelash_genre_id")
                    ->references("id")
                    ->on("eyelash_genres")
                    ->onDelete("cascade");

            $table  ->foreign("eyelash_part_id")
                    ->references("id")
                    ->on("eyelash_parts")
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
        Schema::dropIfExists('eyelashes');
    }
}
