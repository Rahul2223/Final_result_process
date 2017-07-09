<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassstudentList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('classstudent', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('class');

             $table->integer('roll');
             $table->string('name');
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
