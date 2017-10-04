<?php
		//Funções
		
		function aula(){

			echo "Olá Mundo<br/>";
			echo "Aula sobre funcoes<br/><hr/>";

		}
		
		aula();		
		
		function soma($n1, $n2){
			
			$res = $n1+$n2;
			echo "<br/>A soma é: $res<br/>";
		
		}
		
		soma(3,7);
		
		function soma2($n1, $n2){

		$res=$n1+$n2;
		return $res;
		
		}
		
		$so=soma2(10,5);
		
		echo "<br/>SOMA 2: $so</br><hr/>";
		
		$valores=array(1,3,5,7,9,12,6,4,20,18);
		
		function media($val){
			
			$tam=count($val);
			$soma=0;
		
		for($i=0; $i<$tam; $i++){
				
			$soma+=$val[$i];
					
			}
			return $soma/$tam;
		}
		
		$med=media($valores);
		
		echo "Valor da Media: $med<br/><hr/>";
		
?>