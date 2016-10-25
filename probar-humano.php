<?php  
	include('Humano.php');
	$humano = new Humano();
	$humano->fijarEdad(1);
	$humano->fijarNombre('Felipe');
	$humano->crecer();
	$humano->crecer();
	echo $humano->obtenerEdad();
	$humano->crecer();
	echo $humano->obtenerEdad();
?>