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
<h1>DISEÑO DE CONVERTIDOR</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>PESOS:</td>
      <td><label for="pesos"></label>
      <input type="text" name="pesos" id="pesos"></td>
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
    $pesos=$_POST["pesos"];
    $dolar=25;
    $euro=31;
    $reales=6.60;
    echo "el valor de pesos convertidos es euro es:".$pesos/$euro;
    echo "<br> el valor de pesos convertidos en dolar es:".$pesos/$dolar;
    echo "<br> el valor de pesos convertidos real es:".$pesos/$reales;
    
}
    
    
        

        
            
        
        
    

?>



</body>
</html>

