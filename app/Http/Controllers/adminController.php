<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billete;
use App\Transaccion;


class adminController extends Controller
{
    public function inicio(){
        return(view('inicioAdmin'));
    }

    public function adminCaja(){
        $billetes = Billete::find('id',1)->first();
        return view('adminCaja', compact('billetes'));
    }

    public function adminOps(){
        $ops = Transaccion::all();
        return view('adminOps', compact('ops'));
    }
}
