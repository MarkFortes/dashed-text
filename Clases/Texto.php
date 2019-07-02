<?php

	class Texto{

		//Propiedades
		private $text;

		//Constructor
		function Texto($cadena){
			
			$this->text = $cadena;

		}

		//Metodos
		public function guionizarTexto(){
	
			//Creamos una variable para no tratar directamente la privada
			$cadena = $this->text;

			for($i=0; $i<strlen($cadena); $i++){

				echo $cadena[$i];

				if($i < strlen($cadena)-1 && $cadena[$i+1] != " " && $cadena[$i] != " "){
				
					echo "-";	

				}	
										
			}

			//Cuando tenemos el texto modificado lo pasamos a nuestra variable privada
			$this->text = $cadena;

			

		}

	}

?>