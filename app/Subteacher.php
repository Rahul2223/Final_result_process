<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subteacher extends Model
{
    protected $table="subteacherlist";
    protected $fillable=['name','subject','class','year',];
}
