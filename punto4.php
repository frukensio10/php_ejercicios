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
<h1>PUNTO 4 DEL EXAMEN</h1>

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
     <td>Numero3:</td>
      <td><label for="numero3"></label>
      <input type="text" name="numero3" id="numero3"></td>
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
if (isset($_POST["enviando"])){//comprueba si presione boton enviando
    
          $numero1=$_POST["numero1"];//captura el valor que esta en el cuadro texto
          $numero2=$_POST["numero2"];
          $numero3=$_POST["numero3"];
          $mayor=0;
          $i=1;
          
          if($numero1>$numero2&&$numero1>$numero3){
              echo "el numero mayor es:".$numero1;
              $mayor=$numero1;
              
          }
          elseif ($numero3>$numero1&&$numero3>$numero2){
              echo "el numero mayor es:".$numero3;
              $mayor=$numero3;
              
          }
          elseif ($numero3>$numero1&&$numero3>$numero2){
              echo "el numero mayor es:".$numero3;
              $mayor=$numero3;
              
          }
          else{
              echo "no se encontro el mayor";
              
          }
          while ($i<11){
              echo "<br>". $mayor."*".$i."=".$mayor*$i."<br>";
              $i++;
          }
          
          
          
         
    
        }
?>




</body>
</html>
       

    
