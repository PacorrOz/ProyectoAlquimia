<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $table = "transacciones";
    protected $fillable = ['id','usuario', 'estatus', 'operacion','created_at','updated_at']; 
}
