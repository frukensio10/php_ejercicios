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
        function frase ($frase,$conversion=true){
            $frase=strtolower($frase);
            if($conversion==true){
                $resultado=ucwords($frase);
            }
            else {
                $resultado=strtoupper($frase);
            }
            return $resultado;
            }
         $conversion=true;
         
         
            
        
        echo frase("ProBando La funCion");
        
        
        ?>
    </body>
</html>
