<?php
	//Manipulação de Data e Hora
	
	$dia = date("d");
	$mes = date("m");
	$ano = date("Y");
	
	$vet = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro" );
	
	// H -24 horas h-12 horas  i= minutos
	$hora = date("H");
	$minuto = date("i");
	$segundo = date("s");
	
	echo $dia." de ".$vet[$mes -1]." de ".$ano."<br/>";
	echo $hora.":".$minuto.":".$segundo;
	
?>