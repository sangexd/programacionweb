<?php  
class VistaPersonas{
		public function mostrarLista($d){
			if($d->num_rows>0){
				echo "<table border=1>";
				while($fila=$d->fetch_assoc()){
					//echo'<tr><td>'.$fila['paterno']." ".$fila['materno']." ".$fila['nombres'].'</td></tr>';
					echo'<tr>'.
					'<td>'.$fila['materno'].'</td>'.
					'<td>'.$fila['paterno'].'</td>'.
					'<td>'.$fila['nombres'].'</td>'.
					'</tr>';
				}
				echo '</table>';
			}else{
				echo "<h3> No hay resultados </h3>";
			}
		}
	}
?>