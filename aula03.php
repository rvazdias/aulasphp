<?php
	//Operacao com variaveis
	$num1 = 10;
	$num2 = 5;
	
	// Matematica Basica 
	$res = $num1 + $num2;
	echo 'Soma de ',$num1, ' com ',$num2,' = ',$res,'<br/>';
	
	$res = $num1 - $num2;
	echo "Subtracao de $num1 com $num2 = $res<br/>";
	
	$res = $num1 * $num2;
	echo "Multiplicacao de $num1 com $num2 = $res<br/>";
	
	$res = $num1 / $num2;
	echo "Divisao de $num1 com $num2 = $res<br/>";
	
	$res = $num1 % $num2;
	echo "Resto da divisao de $num1 com $num2 = $res<br/>";
	
	$res = $num2 % $num1;
	echo "Resto da divisao de $num2 com $num1 = $res<br/>";
	
	//Atribuicao
	echo '<hr/>';
	
	$num1++;// ou $num1 = $num1 + 1;
	echo "Novo valor de num1: $num1<br/>";
	
	$num2 += 2; // ou $num2 = $num2 + 1; pode ser usado as operacoes de * - /
	echo "Novo valor de num2: $num2<br/>";
	
	
	//Comparação
	echo '<hr/>';
	/*
	$num1 == $num2;  == para comparar se o valor é igual e apenas um = para atribuir
	$num1 != $num2;  Diferente
	$num2 <> $num2;  Diferente
	$num1  > $num2;  num1 maior
	$num1 < $num2;  num1 menor
	$num1 >= $num2; num1 maior igual
	$num1 <= $num2;  num1 menor igual
	
	 AND $$ Comparar E
	 OR II comparar OU
	*/
?>