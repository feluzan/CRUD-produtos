<?php

include_once("header.php");

$sql = "SELECT * FROM produto WHERE codigo='" . $_POST['codigo'] . "';";

$ret = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
$row = mysqli_fetch_row($ret);


?>

<div class="container">
	<form action="action_insere.php" method="POST">
		<input hidden name="todo" value="altera" />
		<input hidden name="id" value=<?php echo $row[0] ?> />
		<div>Código de barras: <?php echo $row[2] ?></div>
		<div class="input">Produto: <input type="text" name="nome" value="<?php echo $row[1] ?>" /> </div>
		<div class="input">Preço de custo: R$ <input type="text" name="custo" value="<?php echo number_format($row[3], 2, ",", "."); ?>" /> </div>
		<div class="input">Preço de venda: R$ <input type="text" name="venda" value="<?php echo number_format($row[4], 2, ",", "."); ?>" /> </div>
		<div  class="input">Estoque: <input type="text" name="estoque" value="<?php echo $row[5]; ?>"/> </div>
		<input class="submit-btn" type="submit" value="Alterar"/>
	</form>

	<form action="action_remove.php" method="POST">
		<input hidden name="id" value=<?php echo $row[0] ?> />
		<input hidden type="text" name="nome" value="<?php echo $row[1] ?>" />
		<input class="submit-btn" type="submit" value="Excluir Registro"/>
	</form>

	<a class="my-a" href="index.php"><div class="home-btn">Voltar ao início</div></a>
</div>

