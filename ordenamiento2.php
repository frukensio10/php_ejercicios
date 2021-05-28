<?php 

$alumnos = array(
				array('nombre' => 'Laura',
					  'edad' => '15',
					  'altura' => 1.8),
				array('nombre' => 'Leandro',
					  'edad' => '15',
					  'altura' => 1.8),
				array('nombre' => 'Florencia',
					  'edad' => '15',
					  'altura' => 1.7),
				array('nombre' => 'Juan',
					  'edad' => '15',
					  'altura' => 1.6),
				array('nombre' => 'Eduardo',
					  'edad' => '15',
					  'altura' => 1.9),
				array('nombre' => 'Pricila',
					  'edad' => '15',
					  'altura' => 1.7),
				array('nombre' => 'Lucas',
					  'edad' => '15',
					  'altura' => 1.6),
				array('nombre' => 'Marcela',
					  'edad' => '15',
					  'altura' => 1.9),
				array('nombre' => 'Marcos',
					  'edad' => '15',
					  'altura' => 1.4),
				array('nombre' => 'Celeste',
					  'edad' => '15',
					  'altura' => 1.7),
				array('nombre' => 'Carlos',
					  'edad' => '15',
					  'altura' => 1.5),
				array('nombre' => 'Belen',
					  'edad' => '15',
					  'altura' => 1.8),
				array('nombre' => 'Lucrecia',
					  'edad' => '15',
					  'altura' => 1.5),
				array('nombre' => 'Rodrigo',
					  'edad' => '15',
					  'altura' => 1.9),
				array('nombre' => 'Frukencio',
					  'edad' => '15',
					  'altura' => 1.7),
				array('nombre' => 'Zrukencio',
					  'edad' => '15',
					  'altura' => 1.7),
				array('nombre' => 'Arukencio',
					  'edad' => '15',
					  'altura' => 1.7),

				);
mostrar($alumnos);

function agregar($alumnos, $numero){
	$alumnos[] = $numero;
	return $alumnos;
}
function mostrar($alumnos){
	for ($i = 0; $i < count($alumnos); $i++){
		$i = $alumnos[$i];
	}

}
function ordenar($alumnos){
	for ($i = 0; $i < count($alumnos); $i++){
		for ($j = 0; $j < count($alumnos) - 1; $j++)
		{
			if ($alumnos[$j] > $alumnos[$j +1]){
				$temp = $alumnos[$j];
				$alumnos[$j] = $alumnos[$j +1];
				$alumnos[$j+1] = $temp;
			}
		}

	}
	return $alumnos;
}
$alumnos = ordenar($alumnos);
mostrar($alumnos);

			




	echo
	 '
			<table>
			<h1>Registros de los alumnos</h1> 


                  <thead>
             
                   <tr>

                   	 <th>N°</th>
                     <th>Nombre</th>
                     <th>Edad</th>
                     <th>Altura</th>

                   </tr> 

                  </thead>

                  <tbody>';

                  foreach ($alumnos as $key => $value) {
                  	
                  	echo '<tr>
                  			<td>'.($key+1).'</td>
                  			<td>'.$value['nombre'].'</td>
                  			<td>'.$value['edad'].'</td>
                  			<td>'.$value['altura'].'</td>
                  		 </tr>';
                  }
                  	

                  echo '</tbody>


            </table>
	';
