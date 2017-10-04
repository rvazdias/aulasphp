<?php
	// LOOP FOR
	
	$i = 0;
	$tam = 5;
	$vet = array($tam);
	
	
	for($i=0; $i < $tam; $i++){
		
		echo "Valor de i: $i<br/>";
		
	}
	
	echo "<hr/>";
	
	for($i=0; $i < $tam; $i++){
		
		$vet[$i]=$i;
		
	}
	
	for($i=0; $i < $tam; $i++){
		
		echo "Valor da pos I: $vet[$i]<br/>";
		
	}
	
?>