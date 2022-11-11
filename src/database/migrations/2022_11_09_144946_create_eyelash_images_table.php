<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEyelashImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eyelash_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eyelash_course_id');
            $table->string('picture');
            $table->timestamps();

            $table  ->foreign("eyelash_course_id")
            ->references("id")
            ->on("eyelash_courses")
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
        Schema::dropIfExists('eyelash_images');
    }
}
