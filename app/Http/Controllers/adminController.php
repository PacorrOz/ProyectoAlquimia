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
        $billetes = Billete::where('id', 1)->first();
        return view('adminCaja', compact('billetes'));
    }

    public function adminOps(){
        $ops = Transaccion::all();
        return view('adminOps', compact('ops'));
    }

    public function cajaPost(Request $request){
        $caja = Billete::find(1);
        $caja->b1000 = $request->b1000;
        $caja->b500 = $request->b500;
        $caja->b200 = $request->b200;
        $caja->b100 = $request->b100;
        $caja->b50 = $request->b50;
        $caja->b20 = $request->b20;
        $caja->b10 = $request->b10;
        $caja->b5 = $request->b5;
        $caja->b2 = $request->b2;
        $caja->b1 = $request->b1;
        $caja->save(); 

        $billetes = Billete::find(1);
        return view('inicio', compact('billetes'));
    }
}
