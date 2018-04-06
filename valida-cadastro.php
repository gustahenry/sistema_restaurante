<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
	if($btnLogin){
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$senha = password_hash($senha, PASSWORD_DEFAULT);


	if((!empty($nome)) AND (!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuÃ¡rio no BD
		$result_usuario = "INSERT INTO usuarios ('nome','email','senha') VALUES ('{$nome}','{$usuario}','{$senha}')";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$_SESSION['msg'] = "Cadastrado com sucesso.";
			header("Location: index.php");
		}else{
			$_SESSION['msg'] = "Falha ao cadastrar";
			header("Location: cadastro.php");
		}
	}else{
		$_SESSION['msg'] = "Faltam dados";
		header("Location: cadastro.php");
	}
}else{
	$_SESSION['msg'] = "PÃ¡gina nÃ£o encontrada";
	header("Location: cadastro.php");
}
