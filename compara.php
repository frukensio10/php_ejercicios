<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $variable1="casa";
        $variable2="CASA";
        $resultado=strcmp($variable1,$variable2);//devuelve 1 si no son iguales
        echo "el resultado es".$resultado;
        if ($resultado){// el 1 en prog es true.stcmp devuelve 1 si no cohincide
            echo"no cohinciden";
            
        }
        else {
            echo"cohinciden";
        }
         ?>
    </body>
</html>
