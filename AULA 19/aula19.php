<?php
	
	session_start();
	
	$_SESSION['vnome']="Rafael";
	$_SESSION['vtexto']="texto para teste";
	$_SESSION['vlogin']="S";
	
	if(isset($_SESSION['vcanal'])){
		echo "<hr/>";
		echo "<br/>".$_SESSION['vcanal'];
		echo "<hr/>";
	}else{
		
		echo "VCAnAL não definida<br/>";
		
	}
	
	echo $_SESSION['vnome'];
	echo "<br/>".$_SESSION['vtexto'];
	
	
?>
<html>
	<body>
		<br/><a href="pg1.php">PAGINA 1</a><br>
	</body>

</html>