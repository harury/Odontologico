<!DOCTYPE html>
<html>
<head>
	<title>Odonto - Agenda</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styleHeader.css">
</head>
<body>
	<?php include 'header.php'?>

	<div class = "container">
	<div class = "row">
	<div class = "col">
	<!--Botão que ativa o Modal-->
	<span class = "d-flex d-inline-flex">
		<form class="form-inline">
      		<input class="form-control mr-2" type="search" placeholder="Buscar Cadastro" aria-label="Search">
      		<button class="btn btn-success btn-md mr-3" type="submit">Pesquisar</button>
    	</form>

		<button type="button" class="btn btn-primary btn-md ml-5" data-toggle="modal" data-target="#modal1">Agendar Cliente</button>

		<button type="button" class="btn btn-dark btn-md ml-5" data-toggle="modal" data-target="#modal1">Imprimir</button>
		<!--Modal-->
		<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title text-primary" id="modalTitle">Formulário de Agendamento</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

		      		<div class="modal-body">
		        		<h5>Dados Pessoais</h5>
						<form class = "form-group" action="agendarCliente.php" method="post">
							<div class="form-group">
								<label for="cpf">CPF:</label>
								<input type="text" class="form-control" id="cpf" placeholder="" name = "cpf">
							</div>
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" class="form-control" id="nome" placeholder="" name = "nome">
							</div>
							<div class="form-group">
								<label for="data">Data de Nascimento:</label>
								<input type="date" class="form-control" id="data" placeholder="" name = "datadeNascimento">
							</div>

							<div class="form-group">
								<label for="telefone">Telefone:</label>
								<input type="text" class="form-control" id="telefone" placeholder="" name = "telefone">
							</div>

							<div class="form-group">
								<label for="celular">Celular:</label>
								<input type="text" class="form-control" id="celular" placeholder="" name = "celular">
							</div>

							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="" name = "email">
							</div>

							<div class="form-group">
								<label for="cep">CEP:</label>
								<input type="text" class="form-control" id="cep" placeholder="" name = "cep">
							</div>

							<div class="form-group">
								<label for="numero">Número:</label>
								<input type="number" class="form-control" id="numero" placeholder="" name = "numero">
							</div>

							<div class="form-group">
								<label for="complemento">Complemento:</label>
								<input type="text" class="form-control" id="complemento" placeholder="" name = "complemento">
							</div>

							<div class="form-group">
								<label for="bairro">Bairro:</label>
								<input type="text" class="form-control" id="bairro" placeholder="" name = "bairro">
							</div>

							<div class="form-group">
								<label for="cidade">Cidade:</label>
								<input type="text" class="form-control" id="cidade" placeholder="" name = "cidade">
							</div>

							<div class="form-group">
								<label for="uf">UF:</label>
								<input type="text" class="form-control" id="uf" placeholder="" name = "uf">
							</div>


							<input type="submit" class="btn btn-primary" value = "Agendar">
						</form>
		      		</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
	</span>
	</div>
	</div>
	</div>

	<div class = "container mt-3">
		<div class = "row">
				<div class = "col">
				<table class="table border">
					<thead class = "bg-light">
						<tr>
							<th scope="col">Nome</th>
							<th scope="col">Telefone</th>
							<th scope="col">Data de Nascimento</th>
							<th scope="col">E-mail</th>
							<th scope="col">Orçamento</th>
							<th scope="col">Ficha</th>
						</tr>
					</thead>
					<?php
						include_once 'conexao.php';

						$sql = "SELECT * FROM tabelateste";

						$busca = mysqli_query($con, $sql);

						while($array = mysqli_fetch_array($busca)){

							$nome = $array['nome'];
							$telefone = $array['telefone'];
							$datadeNascimento = $array['datadeNascimento'];
							$email = $array['email'];
							$orcamento = $array['orcamento'];
							$ficha = $array['ficha'];
					?>
						<tr>
							<td><?php echo $nome?></td>
							<td><?php echo $telefone?></td>
							<td><?php echo $datadeNascimento?></td>
							<td><?php echo $email?></td>
							<td><?php echo $orcamento?></td>
							<td><?php echo $ficha?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>