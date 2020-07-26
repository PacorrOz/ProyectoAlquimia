<!DOCTYPE html>
<html>
    <head>
        <title>
            Inicio || Bienvenido
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
            <div class="instrucciones">
                <h3>Instrucciones de uso </h3>
                <p> 1.- Ingresar el billete que se cambiara  </p>
                <p> 2.- Seleccione el boton de cambiar</p>
                <p> 3.- Confirmar si esta de acuerdo con el cambio</p>
                <p> 4.- La caja dara el cambio y finalizara</p>
            </div>
            <div class="botones">
                <h3>Ingrese su billete</h3>
                <form action="{{ url('IngresaBillete') }}" method="POST">
                {{ csrf_field() }}
                    <input type="radio" hidden checked required>
                    <table class="radio-toolbar">
                        <tr>
                             <td>
                                <input type="radio" id="1000" name="billete" value="1000" required >
                                <label for="1000">$1000</label>
                             </td>
                             <td>
                                <input type="radio" id="500" name="billete" value="500" required>
                                <label for="500">$500&nbsp;</label>
                             </td>
                             <td>
                                <input type="radio" id="200" name="billete" value="200" required>
                                <label for="200">$200&nbsp;</label> 
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="radio-toolbar">
                        <tr>
                            <td>
                                <input type="radio" id="100" name="billete" value="100" required>
                                <label for="100">$100&nbsp;&nbsp;</label> 
                            </td>
                            <td>
                                <input type="radio" id="50" name="billete" value="50" required>
                                <label for="50">$50&nbsp;&nbsp;&nbsp;</label> 
                            </td>
                            <td>
                                <input type="radio" id="20" name="billete" value="20" required>
                                <label for="20">$20&nbsp;&nbsp;&nbsp;</label> 
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="radio-toolbar">
                        <tr>
                            <td><input type="submit" value="Cambiar"></td>
                        </tr>
                    </table>                    
                </form>
            </div>
            <br><br>
            <div class="billetes">
                <h3>Billetes y monedas disponibles</h3>
                <table class="radio-toolbar">
                    <tr>
                        <td>
                            $500
                            @if($billetes->b500 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                        <td>
                            $200
                            @if($billetes->b200 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                        <td>
                            $100
                            @if($billetes->b100 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                        <td>
                            $50
                            @if($billetes->b50 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                        <td>
                            $20
                            @if($billetes->b20 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            $10
                            @if($billetes->b10 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                        <td>
                            $5
                            @if($billetes->b5 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                        <td>
                            $2
                            @if($billetes->b2 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;font-weight:bolder;">clear</i> 
                            @endif
                        </td>
                        <td>
                            $1
                            @if($billetes->b1 > 0)
                                <i class="material-icons" style="font-size:22px;color:#95D904;font-weight:bolder;">done</i>
                            @else
                                <i class="material-icons" style="font-size:20px; color:red;">clear</i> 
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>