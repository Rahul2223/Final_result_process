<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentinfo extends Model
{

    //
    protected $table="studentlist";
    protected $fillable = [
        'name', 'roll', 'fathers_name','class','mothers_name','dob','address','gender','contact',
    ];
}
