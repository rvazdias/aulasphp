<?php
	//IF-ELSE
	
	$nota1 = 70;
	
	if($nota1 >= 70){
		
		echo "APROVADO";
		
	}elseif($nota1 >= 50){
		
		echo "RECUPERACAO";
		
	}else{
		
		echo "REPROVADO";
		
	}
	
	if(($nota1 >= 80)&($nota1 <= 100)){
		echo "<hr/>Aluno Selecionado<br/>";
	}else{
		echo "<hr/>Aluno fora da faixa<br/>";
	}
	
?>