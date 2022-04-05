<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Calculadora simple </title>
    </head>
    <body>
        <h1> Calculadora </h1>
        <form> 
        Primer número: <input type="number" name="num1">
        Segundo número: <input type="number" name="num2">
        <?php
        /* Capturar los datos del form */
        $numero1 = $_REQUEST['num1'];
        $numero2 = $_REQUEST['num2'];
        /*Hacemos las operaciones */
        if(isset($_REQUEST['sumar'])) {
            echo $numero1, " + ", $numero2, " = ", ($numero1 + $numero2);
        }
        if(isset($_REQUEST['restar'])) {
            echo $numero1, " - ", $numero2, " = ", ($numero1 - $numero2);
        }
        if(isset($_REQUEST['dividir'])) {
            echo $numero1, " / ", $numero2, " = ", ($numero1 / $numero2);
        }
        if(isset($_REQUEST['multiplicar'])) {
            echo $numero1, " x ", $numero2, " = ", ($numero1 * $numero2);
        }
        ?>

        <br> <br>
        <input type="submit" value="sumar" name="sumar">
        <input type="submit" value="restar" name="restar">
        <input type="submit" value="multiplicar" name="multiplicar">
        <input type="submit" value="dividir" name="dividir">
    </form>
 

    </body>
</html>