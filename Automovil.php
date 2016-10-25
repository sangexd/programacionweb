<?php  
	class Automovil{
		/*Propiedades Atributos*/
		public $marca;
		public $color;
		public $velocidad=0;
		/*metodos*/
		public function acelerador(){
			$this->velocidad +=5;
			echo "aumenta velocidad a:";
			$this->velocidad. "km/s";
		}
		public function frenar(){
			$this->velocidad -=5;
			if($this->velocidad >0){
				$this->velocidad -=5;
			}
			echo "disminuye velocidad a:";
			$this->velocidad. "km/s";
		}
	}
?>