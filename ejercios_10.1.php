<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="num3"></label>
    <input type="text" name="num3" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
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
    
    

if (!strcasecmp("Suma",$operacion)){
    echo "El resultado de la suma de ".$num1."+".$num2."+".$num3." es :".($num1+$num2+$num3);
    
   }
else if  (!strcasecmp("Resta",$operacion)){
       echo "El resultado de la resta de ".$num1."-".$num2."-".$num3." es :".($num1-$num2-$num3);
       
   } 
else if  (!strcasecmp("División",$operacion)){
       echo "El resultado de la división de ".$num1."/".$num2."/".$num3." es :".($num1/$num2/$num3);
       
}
else {
    echo"el resultado de la multiplicacion es ".$num1."*".$num2."*".$num3." es :".($num1*$num2*$num3);
    
} 
}
?>


</body>
</html>
