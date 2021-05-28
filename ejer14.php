
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
<h1>USANDO BUCLES</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Número Mínimo:</td>
      <td><label for="minimo"></label>
      <input type="text" name="minimo" id="minimo"></td>
    </tr>
    <tr>
      <td>Número Máximo:</td>
      <td><label for="maxim"></label>
      <input type="text" name="maximo" id="maximo"></td>
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
        if (isset ($_POST["enviando"])){
            $min=$_POST["minimo"];
            $max=$_POST["maximo"];
            
            echo "La serie de Número es:<br>";
            while ($min <=$max){
                echo $min."<br>";
                $min++;
            }
        }
    ?>



</body>
</html>