<?php

	include_once 'conexao.php';

	//
	$nome = $_POST['nome'];
	$observacao = $_POST['observacao'];
	
	


    $sql = "INSERT INTO especialidade VALUES(null,'{$nome}','{$observacao}')"; 

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgAtendimento.php?msg=".$msg);
?>