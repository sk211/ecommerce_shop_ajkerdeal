<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('catsname');
            $table->string('sub_cates');
            $table->string('sub_cates_2')->nullable();
            $table->string('image')->nullable();
            $table->integer('desc')->nullable();
            $table->tinyInteger('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categores');
    }
}
