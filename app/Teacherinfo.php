<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherinfo extends Model
{
     protected $table="teacherlist";
    protected $fillable = [
        'name',  'fathers_name','mothers_name','subject','address'
        ,'contact','password',
    ];
}
