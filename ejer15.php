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
      <td>Ingrese Numero:</td>
      <td><label for="numero"></label>
      <input type="text" name="numero" id="numero"></td>
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
        if (isset ($_POST["enviando"]) ){
            $numero=$_POST["numero"];
            $j=0;
            /*$i=0;
            while ($i<=$numero ){
                $j=$i+$j;
                $i++;
            }
                echo "La suma da Como resultado: ".$j;
            * 
            */
            for ($i=0;$i<=$numero;$i++){
                $j=$j+$i;
                
            }
            echo "El Numero ingresado es: ".$numero."<br>";
            echo "La suma da Como resultado: ".$j;
        }
    ?>


</body>
</html>