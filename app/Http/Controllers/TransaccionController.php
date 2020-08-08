<?php
/* Esta es una prueba
Eliminar este comentario */

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
                    while($monto >= 500 && $s500 > 0){
                        $monto -= 500;
                        $b500 +=1;
                        $s500 -= 1;
                    } 
                }else{
                    if ($monto > 200 && $s200 > 0){
                        while($monto > 200 && $s200 > 0){
                            $monto -= 200;
                            $b200 +=1;
                            $s200 -= 1;
                        }
                    }else{
                        if ($monto > 100 && $s100 > 0){
                            while($monto >= 100 && $s100 > 0){
                                $monto -= 100;
                                $b100 +=1;
                                $s100 -= 1;
                            }
                        }else{
                            if($monto > 50 && $s50 > 0){
                                while($monto >= 50 && $s50 > 0){
                                    $monto -= 50;
                                    $b50 +=1;
                                    $s50 -= 1;
                                }
                            }else{
                                if($monto > 20 && $s20 > 0){
                                    while($monto >= 20 && $s20 > 0){
                                        $monto -= 20;
                                        $b20 +=1;
                                        $s20 -= 1;
                                    }
                                }else{
                                    if($monto > 10 && $s10 > 0){
                                        while($monto >= 10 && $s10 > 0){
                                            $monto -= 10;
                                            $b10 +=1;
                                            $s10 -= 1;
                                        }
                                    }else{
                                        if($monto > 5 && $s5 > 0){
                                            while($monto >= 5 && $s5 > 0){
                                                $monto -= 5;
                                                $b5 +=1;
                                                $s5 -= 1;
                                            }
                                        }else{
                                            if($monto > 2 && $s2 > 0){
                                                while($monto >= 2 && $s2 > 0){
                                                    $monto -= 2;
                                                    $b2 +=1;
                                                    $s2 -= 1;
                                                }
                                            }else{
                                                if($monto > 1 && $s1 > 0){
                                                    while($monto >= 1 && $s1 > 0){
                                                        $monto -= 1;
                                                        $b1 += 1;
                                                        $s1 -= 1;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
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

    public function finAceptar($cambio){
        $billetes = Billete::find(1);
        
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

        if($s500 > 0)
            $b500 = ($s500 - $cambio[0]);
        else
            $b500 = 0;
        if($s200 > 0)
            $b200 = ($s200 - $cambio[1]);
        else
            $b200 = 0;
        if($s100 > 0)
            $b100 = ($s100 - $cambio[2]);
        else
            $b100 = 0;
        if($s50 > 0)
            $b50 = ($s50 - $cambio[3]);
        else
            $b50 = 0;
        if($s20 > 0)
            $b20 = ($s20 - $cambio[4]);
        else
            $b20 = 0;

        $caja = Billete::find(1);
        $caja->b500 = $b500;
        $caja->b200 = $b200;
        $caja->b100 = $b100;
        $caja->b50 = $b50;
        $caja->b20 = $b20;
        /*$caja->b10 = $b10;
        $caja->b5 = $b5;
        $caja->b2 = $b2;
        $caja->b1 = $b1;*/
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
