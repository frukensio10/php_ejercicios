<?php
include "operadoresmatematica.php";//traigo operadoresmatematicos con la funcion
if (isset($_POST["button"])){//comprueba si presioné boton enviando
    $numero1=$_POST["num1"]; //guarda la casilla 1 en la variable
    $numero2=$_POST["num2"];
    $otro=$_POST["operacion"];
    calcular($otro);
}

?>

