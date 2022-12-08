<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_details', function (Blueprint $table) {
            $table->id();
            $table->char('detail');
            $table->unsignedBigInteger("part_id");
            $table->timestamps();

            $table  ->foreign("part_id")
                    ->references("id")
                    ->on("parts")
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
        Schema::dropIfExists('part_details');
    }
}
