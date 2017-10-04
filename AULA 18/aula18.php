<?php
	
	//Passagem de valores pela URL
	
	$texto="CURSO DE PHP";
	$nome="Rafael";
	
	echo "<a href=pg1.php?tx=".urlencode($texto)."&no=".urlencode($nome)." target=_self>ABRE PG1</a>";
	
?>