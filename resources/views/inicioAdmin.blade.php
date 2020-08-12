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
                <a href="{{ url('adminCaja') }}" > Admin Caja </a>
                <br><br>
                <a href="{{ url('adminOps') }}" > Ver transacciones </a>
            </div>
        </div>
    </body>
</html>