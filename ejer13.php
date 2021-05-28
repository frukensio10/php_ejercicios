
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
<h1>LISTA DE NUMEROS</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
        <td>NGRESE NUMERO:</td>
      <td><label for="entero"></label>
      <input type="text" name="entero" id="entero"></td>
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
        if (isset ($_POST["enviando"])){ //si preciona enviar
    
            $numero1=$_POST["entero"];//guarda el valor de la casilla 1 en la variable
            //$numero2=$_POST["nombre"];//guarda el valor de la casilla 2 en la variable
            for ($var=1;$var<=$numero1;$var++){
                echo $var."<br>";
            }
    }
        
    ?>


</body>
</html>