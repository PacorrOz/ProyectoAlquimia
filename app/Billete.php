<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billete extends Model
{
    protected $table = "billetes";
    protected $fillable = ['id','b1000','b500','b200','b100','b50','b20','b10','b5','b2','b1','bcntvs']; 
    public $timestamps = false;
}
