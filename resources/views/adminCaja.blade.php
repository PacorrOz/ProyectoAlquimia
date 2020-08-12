<!DOCTYPE html>
<html>
    <head>
        <title>
            Bienvenido Admin
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
            <div class="billetes">
                <h3>Billetes y monedas en caja</h3>
                <br>
                <form action="{{ route('cajaPost') }}" method="POST">
                @csrf
                    <table>
                        <tr>
                            <td>$1000</td>
                            <td>$500</td>
                            <td>$200</td>
                            <td>$100</td>
                            <td>$50</td>
                        </tr>
                        <tr>
                            <td><input type="number" name="b1000" id="b1000" value="{{$billetes->b1000}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b500" id="b500" value="{{$billetes->b500}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b200" id="b200" value="{{$billetes->b200}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b100" id="b100" value="{{$billetes->b100}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b50" id="b50" value="{{$billetes->b50}}" min="0" max="999" step="1"/></td>
                        </tr>
                        <tr>
                            <td>$20</td>
                            <td>$10</td>
                            <td>$5</td>
                            <td>$2</td>
                            <td>$1</td>
                        </tr>
                        <tr>
                            <td><input type="number" name="b20" id="b20" value="{{$billetes->b20}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b10" id="b10" value="{{$billetes->b10}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b5" id="b5" value="{{$billetes->b5}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b2" id="b2" value="{{$billetes->b2}}" min="0" max="999" step="1"/></td>
                            <td><input type="number" name="b1" id="b1" value="{{$billetes->b1}}" min="0" max="999" step="1"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <input type="submit" name="enviar" /> </td>
                            <td></td>
                        </tr>
                    </table>
                </form>    
            </div>
        </div>
    </body>
</html>