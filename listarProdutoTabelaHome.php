<?php
	include 'conexao.php';
	$sql = "SELECT horario, nome, situacao FROM 'tabelaBancoDeDados'";

	$buscar = mysqli_query($con, $sql)

	while($array = mysqli_fetch_array($buscar)){

		$horario = $array['horario'];
		$nomeProxi = $array['nome'];
		$situacao = $array['situacao'];
?>
	<tr>
		<td> <?php echo $horario ?></td>
		<td> <?php echo $nomeProxi ?></td>
		<td> <?php echo $situacao ?></td>
	</tr>

<?php } ?>






<?php
include 'conexao.php';

$sql = "SELECT nome, idade FROM 'tabelaBancoDeDados'";
$buscar = mysqli_query($con, $sql);

while($array = mysqli_fetch_array($buscar)){

	$nome =  $array['nome'];
	$idade =  $array['idade'];
?>
	<tr>
		<td><?php echo $nome; ?></td>
		<td><?php echo $idade; ?></td>
	</tr>

<?php } ?>






<?php
	include 'conexao.php';
	$sql = "SELECT nome, quantidade, dentista FROM 'tabelaBancoDeDados'";

	$buscar = mysqli_query($con, $sql)

	while($array = mysqli_fetch_array($buscar)){

		$nomeProce = $array['nome'];
		$quantidade = $array['quantidade'];
		$dentista = $array['dentista'];
?>
	<tr>
		<td> <?php echo $nomeProce ?></td>
		<td> <?php echo $quantidade ?></td>
		<td> <?php echo $dentista ?></td>
	</tr>

<?php } ?>