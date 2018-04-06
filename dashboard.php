<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "OlÃ¡ ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='sair.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Àrea restrita";
	header("Location: index.php");	
}
