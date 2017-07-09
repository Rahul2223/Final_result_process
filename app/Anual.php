<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anual extends Model
{
   protected $table="anual";
    protected $fillable = [
        'name',  'class','roll','year','bangla','english'
        ,'math','science','socialscience','marks','position'
    ];
}
