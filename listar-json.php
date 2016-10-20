<?php  
	$conexion=new mysqli("localhost","root","root","programacionweb");
	$response=array();
	$response['success']=FALSE;
		if($conexion){
			$sql="SELECT p.* FROM personas p";
			$resultado=$conexion->query($sql);
			$personas=array();
				while($fila=$resultado->fetch_assoc()){
					$personas[]=$fila;
				}
				$response['success']=TRUE;
				$response['personas']=$personas;
				echo json_encode($response);
			}else{
				echo "error";
		}
?>