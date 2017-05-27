<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentlist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('roll');
            $table->integer('class');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->integer('birth');
            $table->string('address');
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
        Schema::drop('studentlist');
    }
}
