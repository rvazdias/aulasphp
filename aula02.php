<?php

  //Variaveis
  $vnome = 'Rafael';
  $vnum = 23;
  $vnum2 = 8.6;
  $soma = 0;

  //Constantes
  define("cNome","Rafael");
  define("ver", PHP_VERSION);
  //Escrevendo variavel na tela
	echo 'Nome: '.$vnome.'<br/>';
	$vnome = 'Vaz';
	echo 'Sobrenome: '.$vnome.'<br/>';
	$vnome = 'Pedro';
	echo 'Nome: '.$vnome.'<br/>';
	$vnome = 'Silva';
	echo 'Sobrenome: ', $vnome, '<br/>';
	$vnome = 'Ze';
	echo "Nome: $vnome<br/>";
	$vnome = 'Colmeia';
	echo "Sobrenome: $vnome<br/>";
	//Escrevendo Constante na tela
	echo "<hr/>";
	echo "Constante cNome: ".cNome."<br/>";
	//Escrevendo algumas Constante pre definida
	echo "Arquivo: ".__FILE__."<br>";
	echo "Versao PHP: ".ver."<br/>";
	echo "Directorio:".__DIR__."<br/>";
	echo "Versao SO:".PHP_OS."<br/>";
	echo "Numero da Linha: ".__LINE__."</br>";
	
?>