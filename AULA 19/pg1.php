<?php
	
	session_start();
	
	if($_SESSION['vlogin']=="S"){
		
		$_SESSION['vcanal']="TESTE CANAL";
		echo "Pagina Nova<br/>";
		echo $_SESSION['vnome'];
		echo "<br/>".$_SESSION['vtexto'];
	
?>
<html>
	<body>
		<br/><a href="pg2.php">PAGINA 2</a><br>
		<br/><a href="aula19.php">VOLTAR</a><br>
	</body>

</html>

<?php
	}
	else{
		
		echo "ACESSO INDEVIDO!";
		
	}
?>