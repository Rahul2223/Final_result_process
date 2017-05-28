<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherlist', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name');
            
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('subject');
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
        Schema::drop('teacherlist');
    }
}
