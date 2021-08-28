<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Course_Name');
            $table->string('Teacher_Name');
            $table->string('Batch_Time');
            $table->string('Teaching_Day');
            $table->string('Semester');
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
        Schema::dropIfExists('course_models');
    }
}
