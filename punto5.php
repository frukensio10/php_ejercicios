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
<h1>DIA DE LA SEMANA</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>dias:</td>
      <td><label for="dias"></label>
      <input type="text" name="dias" id="dias"></td>
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
    $numero=$_POST["numero"];
    
    if ($numero==1){
        echo "el dia de la semana es domingo";
        
    }
    elseif($numero==2){
        echo "el dia de la semana es lunes";
        
    }
    elseif ($numero==3){
        echo "el dia de la semana es martes";
    }
    elseif ($numero==4){
        echo "el dia de la semana es miercoles";
        
    }
    elseif ($numero==5){
        echo "el dia de la semana es jueves";
        
    }
    elseif ($numero==6){
        echo "el dia de la semana es viernes";
        
    }
    elseif ($numero==7){
        echo "el dia de la semana es sabado";
        
    }
    else{
        echo "no existe el dia de la semana";
        
    }
    
    
    
    
}
    
    
        

        
            
        
        
    

?>



</body>
</html>


