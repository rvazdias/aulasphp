<?php
	//Função Recursiva
	
	function aula($num){
		
		if($num != 0){
			
			echo "Funcao aula com valor: $num<br/>";
			aula($num - 1);
			
		}
		
	}
	
	aula(10);
	
	echo "<hr/>";
	//exemplo fatorial
	
	function fat($num){
		
			if($num < 0){
				return -1;
			
			}
			
			if($num <= 1){
				return 1;
			}
			
			return $num*fat($num -1);
		
	}
	
	echo "FATORIAL de 6: ".fat(6);
	
?>