<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<h1>Calculo Aritmetico</h1>
<p>&nbsp;</p>
<form name="form1" method="post" action="ejer10.3.php">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="num1"></label>
    <input type="text" name="num3" id="num3">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Promedio</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
    
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>
    <?php
        if (isset($_POST["button"])){
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $num3=$_POST["num3"];
            $operacion=$_POST["operacion"];
         /**   calcular($operacion);
        
         function calcular($operacion){
             global $num1;
             global $num2;
             global $num3;
         }**/
        if ($num1>0 and $num2>0 and $num3>0){
                        
            
             if (!strcasecmp("promedio",$operacion)){
               $prom= (($num1+$num2+$num3)/3);
               
             
             if ($prom>0 && $prom<=10){
                 echo "El promedio es: ".$prom;
                  if ($num1>$num2&&$num1>$num3){
                 echo '<br>El mayor es: '.$num1;
             }
                elseif ($num2>$num1&&$num2>$num3){
                 echo '<br>El mayor es: '.$num2;
            }
                 
                elseif ($num3>$num2&&$num3>$num1){
                 echo '<br>El mayor es: '.$num3;
            }     
   //**************************************************************    
         
                  if ($num1<$num2&&$num1<$num3){
                 echo '<br>El menor es: '.$num1;
             }
                elseif ($num2<$num1&&$num2<$num3){
                 echo '<br>El menor es: '.$num2;
            }
                 
                elseif ($num3<$num2&&$num3<$num1){
                 echo '<br>El menor es: '.$num3;
            }     
             }
        }
            
             }
              else {
                 echo 'Una de las notas no corresponde';
           
        }
        
        
        }
        
    
    
    ?>



</body>
</html>
