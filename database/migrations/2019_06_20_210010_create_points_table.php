<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('classes_id')->index();
            $table->unsignedInteger('student_id')->index();
            //$table->timestampsTz();
             $table->dateTime('created_by')->nullable();
            $table->dateTime('updated_by')->nullable();

            $table->float('point')->nullable();

            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
