<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentlistTable1 extends Migration
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
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('gender');
            $table->string('dob');
            $table->string('address');
            $table->integer('contact');
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
