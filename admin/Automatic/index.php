<tr>
						<th class="text-center">#</th>
						<th>Fecha</th>
						<th>Alumno</th>
						<th>Comentarios</th>
						<th>Asignatura</th>
						<th>Observaciones</th>
					</tr>

                    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }

    'This Month': [moment().startOf('month'), moment().endOf('month')],