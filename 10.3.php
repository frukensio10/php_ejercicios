<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>promedio</title>
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
      <option>promedio</option>
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
    $promedio=$_POST["promedio"];
    
    

if ($promedio>=1){
    echo "el resultado del promedio es".($num1+$num2+$num3/3);
    echo "es numero positivo";
}
else if (($num1<$num2&$num3)||($num2>$num3)){

    echo "<br>la nota mayor es".$num1;
    echo "<br>la menor nota es".$num3;
    
    
}
else if (($num2<$num1&$num3)||($num1>$num3)){
    echo "<br>la nota mayor es".$num2;
    echo"<br>la nota menor es".$num3;
}
else if (($num3<$num1&$num2)||($num2>$num1)){
    echo "<br>la nota mayor es".$num3;
    echo "<br>la nota menor es".$num1;
    
    
}
}
?>


</body>
</html>

    
    


