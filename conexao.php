<?php
	$con = mysqli_connect("localhost", "root", "", "nomeDoBanco");
	if($con){
		echo 'Conectado com sucesso!';
	} else {
		echo 'Erro ao conectar com o Banco de Dados!';
	}
?>