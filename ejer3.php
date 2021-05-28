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
       
        //Una expresión como (!$esVisible) devuelve false si ($esVisible == true), 
        //o true si ($esVisible == false). En general existen expresiones equivalentes que
        //permiten evitar el uso de este operador cuando se desea.
        $a= 5;
        if ($a > 0){
            echo "El Resultado es: ".($a*-1);
        }
        else{
            echo"El numero es negativo";
        }
        ?>
    </body>
</html>
