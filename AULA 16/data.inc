<?php
	
	$dia = date("d");
	$mes = date("m");
	$ano = date("Y");
	
	echo $dia."/".$mes."/".$ano."<br/>";
	
	$vet = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro" );
	echo $dia." de ".$vet[$mes -1]." de ".$ano."<br/>";
	
?>