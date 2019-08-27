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

