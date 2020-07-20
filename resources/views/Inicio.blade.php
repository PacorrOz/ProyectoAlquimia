<!DOCTYPE html>
<html>
    <head>
        <title>
            Inicio || Bienvenido
        </title>
        <link rel="stylesheet" href=" {{ asset('css/Estilo.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Dosis:wght@500;600&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="todo">
            <div class="header">
                <h1>ALQUIMIA SERVICIO</h1>
                <h3>Transmuta tu dinero</h3>
            </div>
            <div class="instrucciones">
                <h3>Instrucciones de uso </h3>
                <p> 1.- Ingresar el billete que se cambiara  </p>
                <p> 2.- Seleccione el boton de cambiar</p>
                <p> 3.- Confirmar si esta de acuerdo con el cambio</p>
                <p> 4.- La caja darael cambio y finalizara</p>
            </div>
            <!-- <div class="Botones">
                <h3>Ingrese su billete</h3>
                <form action="#">
                    <input type="radio" id="1000" name="billete" value="1000">
                    <input type="radio" id="500" name="billete" value="500">
                    <input type="radio" id="200" name="billete" value="200">
                    <input type="radio" id="100" name="billete" value="100">
                    <input type="radio" id="50" name="billete" value="50">
                    <input type="radio" id="20" name="billete" value="20">
                    <button type="submit">Cambiar</button>
                </form>
            </div> -->
            <div class="botones">
                <h3>Ingrese su billete</h3>
                <form action="#">
                    <table class="radio-toolbar">
                        <tr>
                             <td>
                                <input type="radio" id="1000" name="billete" value="1000" checked>
                                <label for="1000">$1000</label>
                             </td>
                             <td>
                                <input type="radio" id="500" name="billete" value="500">
                                <label for="500">$500&nbsp;</label>
                             </td>
                             <td>
                                <input type="radio" id="200" name="billete" value="200">
                                <label for="200">$200&nbsp;</label> 
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="radio-toolbar">
                        <tr>
                            <td>
                                <input type="radio" id="100" name="billete" value="100">
                                <label for="100">$100&nbsp;&nbsp;</label> 
                            </td>
                            <td>
                                <input type="radio" id="50" name="billete" value="50">
                                <label for="50">$50&nbsp;&nbsp;&nbsp;</label> 
                            </td>
                            <td>
                                <input type="radio" id="20" name="billete" value="20">
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
            <br>
            <div class="instrucciones">
                <h3>Billetes y monedas disponibles</h3>
                <table class="radio-toolbar">
                <tr>
                    <td>$500</td><td>$200</td><td>$200</td><td>$200</td><td>$100</td><td>$50</td>
                </tr>
                <tr>
                    <td>$20</td><td>$10</td><td>$5</td><td>$2</td><td>$1</td><td>$0.50</td>
                </tr>
                </table>
            </div>
        </div>
    </body>
</html>