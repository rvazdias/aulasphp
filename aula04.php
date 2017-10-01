<?php
	//Arrays (vetores)
	
	$vet = array(7);
	$vet2 = array (100,200,300);
	$vet3 = array ("nome" => "Rafael", "Cidade"=>"GO","Curso"=>"php");
	$i=6;
	
	//Matrizes
	
	$mat = array(
			array ("Carro", 30000),
			array ("Carro2", 80000),
			array ("Carro3", 1000000)
			);
	
	$vet[0] = "Carro";
	$vet[1] = "Aviao";
	$vet[2] = "Navio";
	$vet[3] = "Moto";
	$vet[4] = "Onibus";
	$vet[5] = 123456;
	$vet[6] = $vet3["nome"];
	
	echo "Elemento de indice $i = ".$vet[$i]."<br/>";
	echo "Nome: ".$vet3["nome"]." - Cidade: ".$vet3["Cidade"]." - Curso:".$vet3["Curso"]."<br/>";
	echo "<hr/>";
	echo "Carro FIAT ".$mat[0][0]."-Valor: ".$mat[0][1]."<br/>";
	echo "Carro TOYOTA ".$mat[1][0]."-Valor: ".$mat[1][1]."<br/>";
	echo "Carro FERRARI ".$mat[2][0]."-Valor: ".$mat[2][1]."<br/>";
?>