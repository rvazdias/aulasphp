<?php
	
	//Loop While
	
	$i = 0;
	$tam = 10;
	$vet = array($tam);
	
	
	while($i < $tam){
		
		echo "VALOR I: $i<br/>";
		$i++;
		
	}
	
	echo "<hr/>";
	
	$i=0;
	
	while($i < $tam){
		
		$vet[$i]=$i;
		$i++;
	}
	
	$i=0;
	
	while($i < $tam){
		echo "Vetor: $vet[$i]<br/>";
		$i++;
		
	}
	
?>