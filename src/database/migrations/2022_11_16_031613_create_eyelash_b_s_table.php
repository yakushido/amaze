<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEyelashBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eyelash_b_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eyelash_genre_id');
            $table->char('name');
            $table->integer('plice');
            $table->timestamps();

            $table  ->foreign("eyelash_genre_id")
                    ->references("id")
                    ->on("eyelash_genres")
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
        Schema::dropIfExists('eyelash_b_s');
    }
}
