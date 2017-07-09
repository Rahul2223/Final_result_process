<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firstterm extends Model
{
 protected $table="firstterm";
    protected $fillable = [
        'name',  'class','roll','year','bangla','english'
        ,'math','science','socialscience','marks','position'
    ];
}
