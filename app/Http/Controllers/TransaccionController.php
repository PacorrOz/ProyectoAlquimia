<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billete;

class TransaccionController extends Controller
{
    public function inicio(){
        $billetes = Billete::where('id', 1)->first();
        return view ('inicio', compact('billetes'));
    }

    public function IngresaBillete(Request $request){
        $monto = $request->billete;
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
            return view ('pruebas', compact('cambio'));
        }else{
            $error_msg = 'No hay fondos suficientes';
            return view('pruebas', compact('error_msg'));
        }
        
    }
}
