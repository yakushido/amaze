<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridalBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridal_b_s', function (Blueprint $table) {
            $table->id();
            $table->char('name')->nullable(true);
            $table->unsignedBigInteger('bridal_genre_id');
            $table->integer('plice');
            $table->timestamps();

            $table  ->foreign("bridal_genre_id")
                    ->references("id")
                    ->on("bridal_genres")
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
        Schema::dropIfExists('bridal_b_s');
    }
}
