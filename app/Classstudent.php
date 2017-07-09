<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classstudent extends Model
{
    protected $table="classstudent";
    protected $fillable=['class','year','roll','name','contact',];
}
