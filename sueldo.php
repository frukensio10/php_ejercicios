<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>

<body>
<h1>SUELDO</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>PESOS:</td>
      <td><label for="sueldo"></label>
      <input type="text" name="sueldo" id="sueldo"></td>
    </tr>
    <tr>
   
   
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>
<?php
if (isset($_POST["enviando"])){
    
    $sueldo=$_POST["sueldo"];
    $operacion=($sueldo*5)/100;
    $opercion2=($sueldo*7)/100;
    echo "su sueldo ingreso es: $".$sueldo;
    
    if ($sueldo<=2500){
        echo "<br>se debe aplicar un descuento del 5%";
        echo "<br>el monto que se descuenta es $".$operacion;
        echo "<br>el total neto es". ($sueldo-$operacion);
        
    }
    else{
        echo "<br>se le aplicara un descuento del %7";
        echo "<br>el monto que se descuenta es: $".($sueldo-$operacion2);
        echo "<br>el total neto es".($sueldo-$operacion2);
        
        
    }
    
   
    
}
    
    
        

        
            
        
        
    

?>



</body>
</html>

