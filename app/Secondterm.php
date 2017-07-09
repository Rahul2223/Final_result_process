<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secondterm extends Model
{
  protected $table="secondterm";
    protected $fillable = [
        'name','class','roll','year','bangla','english'
        ,'math','science','socialscience','marks','position'
    ];
}
