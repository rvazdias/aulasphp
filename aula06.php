<?php

	//Switch Case

	$opc = 1; // 1:Carro - 2:Moto - 3:Bicicleta - 4:Navio - 5:Aviao
	
	switch($opc){
		
		case 1:
			echo "Carro";
			break;
		case 2:
			echo "Moto";
			break;
		case 3:
			echo "Bicicleta";
			break;
		case 4:
			echo "Navio";
			break;
		case 5:
			echo "Aviao";
			break;
		default:
			echo "Transporte invalido";
			break;
		
	}
	
	echo "<hr/>";
	
	switch($opc){
		
		case ($opc <= 3 and $opc >= 0):
			
				echo "Transporte Terrestre";
				break;
		case ($opc > 3 and $opc <= 5):
				echo "transporte não terrestre";
				break;
	}
?>