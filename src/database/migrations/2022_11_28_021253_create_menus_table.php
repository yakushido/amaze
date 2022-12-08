<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->char('menu')->nullable(True);
            $table->integer('priceA');
            $table->integer('priceB')->nullable(True);
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("gender_id");
            $table->unsignedBigInteger("part_id")->nullable(true);
            $table->timestamps();

            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
                ->onDelete("cascade");

            $table->foreign("gender_id")
                ->references("id")
                ->on("genders")
                ->onDelete("cascade");
                
            $table->foreign("part_id")
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
        Schema::dropIfExists('menus');
    }
}
