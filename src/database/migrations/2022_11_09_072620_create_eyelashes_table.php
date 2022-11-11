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
            $table->unsignedBigInteger('eyelash_category_id');
            $table->unsignedBigInteger('eyelash_course_id');
            $table->timestamps();

            $table  ->foreign("eyelash_category_id")
                    ->references("id")
                    ->on("eyelash_categories")
                    ->onDelete("cascade");
            
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
        Schema::dropIfExists('eyelashes');
    }
}
