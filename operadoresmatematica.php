
<?php

    function calcular($operacion){
        global $numero1;
        global $numero2;
    
    if (!strcasecmp("suma",$operacion)){
        echo "el resultado de la suma es ".($numero1+$numero2);
        }   
    if (!strcasecmp("resta",$operacion)){
        echo "el resultado de la resta es ".($numero1-$numero2);
        }
    if (!strcasecmp("division",$operacion)){
         echo "el resultado de la division es".($numero1/$numero2);
     }
    if (!strcasecmp("multiplicacion",$operacion)){
         echo "el resultado de la multiplicacion es".($numero1*$numero2);
     }
    if (!strcasecmp("modulo",$operacion)){
         echo "el resultado del modulo es".($numero1%$numero2);
     }
    if (!strcasecmp("decremento",$operacion)){
        echo "el resultado del decremento es".$numero1--;
    }
    if (!strcasecmp("incremento",$operacion)){
        echo "el resultado del incremento es".$numero1++;
    }
    
    
              
    
    }


?>



</body>
</html>
    