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
                @if(isset($ops))
                    <table>
                        <tr>
                            <th><h3>Id</h3> </th>
                            <th><h3>Operación</h3> </th>
                            <th><h3>Estatus</h3> </th>
                            <th><h3>Fecha</h3> </th>
                        </tr>
                        
                            @foreach($ops as $op)
                            <tr>
                                <td>{{$op->id}}</td>
                                <td>{{$op->operacion}}</td>
                                <td>{{$op->estatus}}</td>
                                <td>{{$op->created_at}}</td>
                                </tr>
                            @endforeach
                        
                    </table>    
                
                @else
                    <h3>Aun no hay transacciones</h3>
                @endif
            </div>
        </div>
    </body>
</html>