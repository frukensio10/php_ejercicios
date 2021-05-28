<?php
       if (isset($_POST["enviando"])){ //comprueba si presione boton enviando
           $usuario=$_POST{"nombre_usuario"}; //captura el valor que esta en el 
           $edad=$_POST{"edad_usuario"};
           
           if (!strcasecmp($usuario,"edu")&&($edad>=18)){
               echo"acceso permitido";
           }
           else{
               echo"acceso denegado";
           }
       }
           
       


?>
