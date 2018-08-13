<?php
include_once("header.php");

$sql = "SELECT * FROM produto ORDER BY nome";
$ret = mysqli_query($link, $sql,MYSQLI_USE_RESULT)

?>

<div class="container">

	<div class="lista-tabela">
		
		<table class="my-table">
			<tr style="text-align: center;">
				<th>Código</th>
				<th>Produto</th>
				<th>Preço de Custo</th>
				<th>Preço de Venda</th>
				<th>Estoque</th>
				<th>Estoque x Custo </th>
			</tr>
			<?php

			while($row=mysqli_fetch_row($ret)){
				?>
				<tr>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td class="celula-preco">R$ <?php echo number_format($row[3], 2, ",", "."); ?></td>
					<td class="celula-preco">R$ <?php echo number_format($row[4], 2, ",", "."); ?></td>
					<td class="celula-preco"><?php echo number_format($row[5], 2, ",", "."); ?></td>
					<td class="celula-preco">R$ <?php echo (number_format($row[4], 2, ",", ".")*number_format($row[5], 2, ",", ".")); ?></td>
				</tr>

				<?php
			}

			?>


		</table>

		<a class="my-a" href="index.php"><div class="home-btn">Voltar ao início</div></a>
		<a class="my-a" href="insere.php"><div class="home-btn">Cadastrar produto</div></a>
		<a class="my-a" style="" href="consulta.php"><div class="home-btn"> Consultar Preço</div></a>
		<a class="my-a" style="" href="altera.php"><div class="home-btn"> Alterar Produto</div></a>

	</div>





</div>
