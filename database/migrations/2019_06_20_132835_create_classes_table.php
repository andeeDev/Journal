<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ctg_id')->index();
            $table->dateTime('datetime');
            $table->unsignedInteger('sbj_id')->index();
            $table->unsignedInteger('tch_id')->index();


            $table->foreign('tch_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('sbj_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('ctg_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
