<!doctype html>
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
<h1>EJERCICIO 8 Y 9</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Numero1:</td>
      <td><label for="numero1"></label>
      <input type="text" name="numero1" id="numero1"></td>
    </tr>
    <tr>
      <td>Numero2:</td>
      <td><label for="numero2"></label>
      <input type="text" name="numero2" id="numero2"></td>
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
if (isset($POST["enviando"])){//comprueba si presione boton enviando
    
          $numero1=$_POST["numero1"];//captura el valor que esta en el cuadro texto
          $numero2=$_POST["numero2"];
          
          
      
       if ($numero1>$numero2){
           echo "el mayor es el numero ". $numero1. "<br>";
           
           echo "el mayor es el numero ". $numero2. "<br>";
           
       }
       else if ($numero1<$numero2) {
           echo "el mayor es el numero ". $numero2. "<br>";
           
           echo "el menor es el numero ". $numero2. "<br>";
           
           
       }
       else{
           echo "numeros son iguales";
       } 
        }
?>




</body>
</html>
       

    