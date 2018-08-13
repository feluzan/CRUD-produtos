<?php

include_once("header.php");

$sql = "SELECT * FROM produto WHERE codigo='" . $_POST['codigo'] . "';";

$ret = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
$row = mysqli_fetch_row($ret);


?>

<div class="container">
	<div>Código de barras: <?php echo $row[2] ?></div>
	<div>Produto: <?php echo $row[1] ?> </div>
	<div>Preço de venda: R$ <?php echo number_format($row[4], 2, ",", "."); ?> </div>
</div>

<div>
	<a href="consulta.php">Clique aqui</a> para consultar outro produto.<br>
	Ou <a href="index.php">Clique aqui</a> para retornar ao início.</div>
