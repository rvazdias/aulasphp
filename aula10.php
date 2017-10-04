<?php

	//Loop FOREACH
	
	$transp = array("Carro", "Moto", "Bicicleta", "Onibus", "Aviao", "Navio");

	foreach($transp as $veiculo){
		
		echo "$veiculo<br/>";
		if($veiculo == "Aviao"){
			break;
		}
	}
	
	echo "<hr/>";
	
	foreach($transp as $veiculo){
		
		if($veiculo == "Bicicleta")	
			echo "Bicicleta está na lista de veiculos<br/>";
		if($veiculo == "Trem")
			echo "Trem está na lista";
		}
	
	
?>