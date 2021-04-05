<?php 
	$data[0] = ['trabajador' => 'María Luisa Rojas','horario'      => '8 am a 3 pm', 'departamento'  => 'Producción'];
	$data[1] = ['trabajador' => 'José Pérez Márquez','horario'     => '3 pm a 10 pm', 'departamento' => 'Seguridad'];
	$data[2] = ['trabajador' => 'Catalina Donoso Correa','horario' => '10 pm a 6 am', 'departamento' => 'Producción'];
	$data[3] = ['trabajador' => 'Raúl Lavín','horario'             => '8 am a 3 pm', 'departamento'  => 'Producción'];
	$data[4] = ['trabajador' => 'Jorge Luis Venegas','horario'     => '3 pm a 10 pm', 'departamento' => 'Logística'];

    $tabla = null;
	$tabla = '<table border="1"><tr><th>Trabajador</th><th>Horario</th><th>Departamento</th></tr>';
			
	for ($i = 0; $i < count($data) ; $i++) {
		$tabla .= '<tr>';
		$tabla .= '<td>' . $data[$i]['trabajador']   . '</td>';
		$tabla .= '<td>' . $data[$i]['horario']      . '</td>';
		$tabla .= '<td>' . $data[$i]['departamento'] . '</td>';
		$tabla .= '</tr>';				
	}

	$tabla .= '</table>';
	echo $tabla;