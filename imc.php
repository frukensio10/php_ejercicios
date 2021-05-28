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
<h1>IMC</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>peso:</td>
      <td><label for="peso"></label>
      <input type="text" name="peso" id="peso"></td>
    </tr>
    <tr>
      <td>altura:</td>
      <td><label for="altura"></label>
      <input type="text" name="altura" id="altura"></td>
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
    $peso=$_POST["peso"];
    $altura=$_POST["altura"];
    $IMC=$peso/($altura*$altura);
    
    echo"el peso ingresado es:".$peso;
    echo"<br> la altura ingresada es:".$altura;
    echo"<br> el IMS es:".$IMC;
    
    if ($IMC<=18.4){
        echo "<br> BAJO PESO";
       
    }
    elseif (($IMC>18.5)and($IMC<=24.9)){
        echo "<br> PESO NORMAL";
    }
    elseif (($IMC>25)and($IMC<=29.9)){
        echo "<br> SOBREPESO";
    }
    else{
        echo "<br> OBESIDAD";
    }
    
}

        
            
        
        
    

?>



</body>
</html>


