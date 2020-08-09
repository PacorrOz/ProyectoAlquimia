<!DOCTYPE html>
<html>
    <head>
        <title>
            Transaccion Completada
        </title>
        <link rel="stylesheet" href=" {{ asset('css/Estilo.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Dosis:wght@500;600&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="todo">
            <div class="header">
                <br>
                <h1>ALQUIMIA SERVICIO</h1>
                <h3>Transmuta tu dinero</h3>
            </div>
            @if(isset($cambio))
                <div class="billetes">
                    <br>
                    <h3>Ingreso un billete de ${{$monto_show}}</h3>
                    <h3>Su cambio es:</h3>
                    <table class="radio-toolbar">
                        <tr>
                            <td>{{ $b500 }} Billetes de $500</td>
                            <td>{{ $b200 }} Billetes de $200</td>
                            <td>{{ $b100 }} Billetes de $100</td> 
                        </tr>
                        <tr>
                            <td>{{ $b50 }} Billetes de $50</td>
                            <td>{{ $b20 }} Billetes de $20</td>
                            <td>{{ $b10 }} Monedas de $10</td>
                        </tr>
                        <tr>
                            <td>{{ $b5 }} Monedas de $5</td>
                            <td>{{ $b2 }} Monedas de $2</td>
                            <td>{{ $b1 }} Monedas de $1</td> 
                        </tr>
                    </table>
                    <table class="opciones">

                        <tr>
                            <td class="aceptar">
                                <a href="{{ route('finAceptar', [$b500, $b200, $b100, $b50, $b20, $b10, $b5, $b2, $b1, $monto_show]) }}" >
                                    Aceptar
                                </a>
                            </td>
                            <td class="nada">&nbsp;&nbsp;</td>
                            <td class="cancelar">
                                <a href="{{ url('finCancelar') }}" >
                                    Cancelar
                                </a>
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
            @endif
            @if(isset($error_msg))
                <div class="billetes">
                    <br>
                    <h3 ">{{ $error_msg }}{{ $monto_show }} </h3>
                    <table class="opciones">
                        <tr>
                            <td class="nada">&nbsp;&nbsp;</td>
                            <td class="aceptar">
                                <a href="{{ url('finError') }}" >
                                    Aceptar
                                </a>
                            </td>
                            <td class="nada">&nbsp;&nbsp;</td>
                        </tr>
                    </table>
                    <br>
                </div>
            @endif
        </div>
    </body>
</html>