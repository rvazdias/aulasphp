<?php
	
	//ISSET
	
	$aula=NULL;
	
	if(isset($aula)){

		echo "Variavel aula ok";
		
	}else{
		
		echo "Variavel não definida ";
		
	}
	
	echo "<hr/>";
	
	if(isset($_POST["f_nome"])){
		
		$vnome = $_POST["f_nome"];
		
		echo "Nome: $vnome<br/>";
		
	}else{
		
		echo "NOME EM BRANCO ";
			
?>

<html>
	<body>
		<form name="f_aula" method="post" action="aula17.php";>
			<br/>
			<label>Nome:</label>
			<input type="text" name="f_nome"/>
			<br/>
			<br/>
			<input type="submit" value="ENVIAR"/>
		</form>
	</body>
</html>

<?php
	}
?>