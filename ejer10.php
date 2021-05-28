
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
<h1>COSTO DE LLAMADAS</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Duracion:</td>
      <td><label for="duracion"></label>
      <input type="text" name="duracion" id="duracion"></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Calcular"></td>
    </tr>
  </table>
</form>
<?php
     if (isset ($_POST["enviando"])){ //si preciona enviar
    
            $dura=$_POST["duracion"];//g
            if ($dura<=0.50){
                $calculo=$dura * 0.50;
            
                echo "El costo de la llamada es: $".$calculo." pesos";
            }
            else {
                $calculo=$dura*0.60;
                echo "El costo de la llamada es: $".$calculo." pesos";
            }
         
              
     }
?>



</body>
</html>