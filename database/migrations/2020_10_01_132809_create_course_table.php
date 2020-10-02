<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_level');
            $table->string('course_id',20);
            $table->string('course_name');
            $table->string('degree_name_short');
            $table->string('course_name_eng');
            $table->string('degree_name_short_eng');
            $table->string('majors_id');
            $table->string('faculty_id');
            $table->string('user)edit');
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
        Schema::dropIfExists('course');
    }
}
