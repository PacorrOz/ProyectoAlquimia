<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billete;
use App\Transaccion;

class TransaccionController extends Controller
{
    public function inicio(){
        $billetes = Billete::where('id', 1)->first();
        return view ('inicio', compact('billetes'));
    }

    public function IngresaBillete(Request $request){
        $monto = $request->billete;
        $monto_show = $monto;
        $billetes_stock = Billete::where('id', 1)->first();
        $s500 = $billetes_stock->b500;
        $s200 = $billetes_stock->b200;
        $s100 = $billetes_stock->b100;
        $s50 = $billetes_stock->b50;
        $s20 = $billetes_stock->b20;
        $s10 = $billetes_stock->b10;
        $s5 = $billetes_stock->b5;
        $s2 = $billetes_stock->b2;
        $s1 = $billetes_stock->b1;
        $b500 = $b200 = $b100 = $b50 = $b20 = $b10 = $b5 = $b2 = $b1 = 0;
        $total_caja = ($s500 * 500) + ($s200 * 200) + ($s100 * 100) + ($s50 *50)
                        + ($s20 * 20) + ($s10 * 10) + ($s5 * 5) + ($s2 * 2) + ($s1 * 1);
        if($total_caja >= $monto ){
            while ($monto > 0){
                if ($monto > 500 && $s500 > 0){
                    while($monto > 500 && $s500 > 0){
                        $monto -= 500;
                        $b500 +=1;
                        $s500 -= 1;
                    } 
                }elseif($monto > 200 && $s200 > 0){
                    while($monto > 200 && $s200 > 0){
                        $monto -= 200;
                        $b200 +=1;
                        $s200 -= 1;
                    }
                }elseif($monto > 100 && $s100 > 0){
                    while($monto >= 100 && $s100 > 0){
                        $monto -= 100;
                        $b100 +=1;
                        $s100 -= 1;
                    }
                }elseif($monto > 50 && $s50 > 0){
                    while($monto >= 50 && $s50 > 0){
                        $monto -= 50;
                        $b50 +=1;
                        $s50 -= 1;
                    }
                }elseif($monto > 20 && $s20 > 0){
                    while($monto >= 20 && $s20 > 0){
                        $monto -= 20;
                        $b20 +=1;
                        $s20 -= 1;
                    }
                }elseif($monto > 10 && $s10 > 0){
                    while($monto >= 10 && $s10 > 0){
                        $monto -= 10;
                        $b10 +=1;
                        $s10 -= 1;
                    }
                }elseif($monto > 5 && $s5 > 0){
                    while($monto >= 5 && $s5 > 0){
                        $monto -= 5;
                        $b5 +=1;
                        $s5 -= 1;
                    }
                }elseif($monto > 2 && $s2 > 0){
                    while($monto >= 2 && $s2 > 0){
                        $monto -= 2;
                        $b2 +=1;
                        $s2 -= 1;
                    }
                }elseif($monto > 1 && $s1 > 0){
                    while($monto >= 1 && $s1 > 0){
                        $monto -= 1;
                        $b1 += 1;
                        $s1 -= 1;
                    }
                }
                else{
                    //break;
                    $error_msg = 'Disculpe la molestia, por el momento no contamos con fondos suficientes para darle cambio de su billete de $';
                    return view('Resultados', compact('error_msg', 'monto_show'));
                }
            }
            $cambio = [$b500, $b200, $b100, $b50, $b20, $b10, $b5, $b2, $b1];
            return view ('Resultados', compact('cambio', 'b500', 'b200', 'b100', 'b50', 'b20', 'b10', 'b5', 'b2', 'b1', 'monto_show'));
        }else{
            $error_msg = 'Disculpe la molestia, por el momento no contamos con fondos suficientes para darle cambio de su billete de $';
            return view('Resultados', compact('error_msg', 'monto_show'));
        }
    }

    public function finError(){
        $transaccion = new Transaccion;
        $transaccion->usuario = "Usuario";
        $transaccion->operacion = "Cambio billete";
        $transaccion->estatus = "Sin Fondos";
        $transaccion->save();

        $billetes = Billete::where('id', 1)->first();
        return view ('inicio', compact('billetes'));
    }

    public function finCancelar(){
        $transaccion = new Transaccion;
        $transaccion->usuario = "Usuario";
        $transaccion->operacion = "Cambio billete";
        $transaccion->estatus = "Cancelado por Usuario";
        $transaccion->save();

        $billetes = Billete::where('id', 1)->first();
        return view ('inicio', compact('billetes'));
    }

    public function finAceptar($b500, $b200, $b100, $b50, $b20, $b10, $b5, $b2, $b1, $monto_show){
        $cantidad = $monto_show;
        $billetes = Billete::where('id', 1)->first();

        if(is_numeric($billetes->b500) && $billetes->b500 > 0){
            if(is_numeric($b500) && $b500 > 0)
                $q500  = ($billetes->b500 - $b500);
            else
                $q500 = $billetes->b500;
        }
        else
            $q500 = 0;

        if(is_numeric($billetes->b200) && $billetes->b200 > 0){
            if(is_numeric($b200) && $b200 > 0)
                $q200 = ($billetes->b200 - $b200);
            else
                $q200 = $billetes->b200;
        }
        else
            $q200 = 0;
        
        if(is_numeric($billetes->b100) && $billetes->b100 > 0){
            if(is_numeric($b100) && $b100 > 0)
                $q100 = ($billetes->b100 - $b100);
            else
                $q100 = $billetes->b100;
        }
        else
            $q100 = 0;
            
        if(is_numeric($billetes->b50) && $billetes->b50 > 0){
            if(is_numeric($b50) && $b50 > 0)
                $q50 = ($billetes->b50 - $b50);
            else
                $q50 = $billetes->b50;
        }
        else
            $q50 = 0;
            
        if(is_numeric($billetes->b20) && $billetes->b20 > 0){
            if(is_numeric($b20) && $b20 > 0)
                $q20 = ($billetes->b20 - $b20);
            else
                $q20 = $billetes->b20;
        }
        else
            $q20 = 0;
        
        if(is_numeric($billetes->b10) && $billetes->b10 > 0){
            if(is_numeric($b10) && $b10 > 0)
                $q10 = ($billetes->b10 - $b10);
            else
                $q10 = $billetes->b10;
        }
        else
            $q10 = 0;
        
        if(is_numeric($billetes->b5) && $billetes->b5 > 0){
            if(is_numeric($b5) && $b5 > 0)
                $q5 = ($billetes->b5 - $b5);
            else
                $q5 = $billetes->b5;
        }
        else
            $q5 = 0;
        
        if(is_numeric($billetes->b2) && $billetes->b2 > 0){
            if(is_numeric($b2) && $b2 > 0)
                $q2 = ($billetes->b2 - $b2);
            else
                $q2 = $billetes->b2;
        }
        else
            $q2 = 0;
        
        if(is_numeric($billetes->b1) && $billetes->b1 > 0){
            if(is_numeric($b1) && $b1 > 0)
                $q1 = ($billetes->b1 - $b1);
            else
                $q1 = $billetes->b1;
        }
        else
            $q1 = 0;

        if($cantidad == 1000){
            if(is_numeric($billetes->b1000) && $billetes->b1000 > 0)
                $q1000 = $billetes->b1000 + 1;
            else
                $q1000 = 1;
        }
        else{
            $q1000 = $billetes->b1000;
            if($cantidad == 500)
                $q500 = $q500 + $billetes->b500 + 1;
            elseif($cantidad == 200)
                $q200 = $q200 + $billetes->b200 + 1;
            elseif($cantidad == 100)
                $q100 = $q100 + $billetes->b100 + 1;
            elseif($cantidad == 50)
                $q50 = $q50 + $billetes->b50 + 1;
            elseif($cantidad == 20)
                $q20 = $q20 + $billetes->b20 + 1;
        }
        $caja = Billete::find(1);
        $caja->b1000 = $q1000;
        $caja->b500 = $q500;
        $caja->b200 = $q200;
        $caja->b100 = $q100;
        $caja->b50 = $q50;
        $caja->b20 = $q20;
        $caja->b10 = $q10;
        $caja->b5 = $q5;
        $caja->b2 = $q2;
        $caja->b1 = $q1;
        $caja->save(); 

        $transaccion = new Transaccion;
        $transaccion->usuario = "Usuario";
        $transaccion->operacion = "Cambio billete";
        $transaccion->estatus = "Exito";
        $transaccion->save(); 

        $billetes = Billete::where('id', 1)->first();
        return view ('inicio', compact('billetes'));
    }
}
