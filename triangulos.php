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
<h1>EJERCICIOS 7 TRIANGULOS</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>lado1:</td>
      <td><label for="lado1"></label>
      <input type="text" name="lado1" id="lado1"></td>
    </tr>
    <tr>
      <td>lado2:</td>
      <td><label for="lado2"></label>
      <input type="text" name="lado2" id="lado2"></td>
    </tr>
    <tr>
      
      <td>lado3:</td>
      <td><label for="lado3"></label>
      <input type="text" name="lado3" id="lado3"></td>
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
if (isset($_POST["enviando"])){//comprueba si presioné boton enviando
    $lado1=$_POST["lado1"]; //guarda la casilla 1 en la variable
    $lado2=$_POST["lado2"];
    $lado3=$_POST["lado3"];
    if ($lado1==$lado2&&$lado1==$lado3){
    echo "triangulo equilatero";
     }
    else if(($lado1==$lado2&&$lado1!=$lado3)||($lado1==$lado3&&$lado1!=$lado2)){
     echo "triangulo isosceles";
 }
    else if ($lado1!=$lado2&&$lado1!=$lado3){
        echo "triangulo escaleno";
    }
}
?>



</body>
</html>
