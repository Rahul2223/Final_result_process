<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classteacherinfo extends Model
{
    protected $table="classteacherlist";
    protected $fillable = [
        'year','name','class','subject','mobileno','password'
    ];
}
