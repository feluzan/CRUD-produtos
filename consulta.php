<?php
include_once("header.php");
?>

<div class="container">

<form action="consulta.php" method="POST">
	<input hidden name="tipo-consulta" value="cod" />
	<div class="input">Código: <input type="text" name="codigo" id="cod" /> </div>
	<input class="submit-btn" type="submit" value="Consultar pelo código"/>
</form>


<form action="action_consulta.php" method="POST">
	<input hidden name="tipo-consulta" value="nome" />
	<div class="input">Nome: <input type="text" name="codigo" /> </div>
	<input class="submit-btn" type="submit" value="Consultar pelo nome" disabled/> *Ainda não disponível
</form>


<?php

	if(isset($_POST['codigo'])){

		$sql = "SELECT * FROM produto WHERE codigo='" . $_POST['codigo'] . "';";

		$ret = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
		$row = mysqli_fetch_row($ret);
		?>

		<div class="">
			<div>Código de barras: <?php echo $row[2] ?></div>
			<div>Produto: <?php echo $row[1] ?> </div>
			<div>Preço de venda: R$ <?php echo number_format($row[4], 2, ",", "."); ?> </div>
		</div>

		<?php

	}
?>

<a class="my-a" href="index.php"><div class="home-btn">Voltar ao início</div></a>

</div>


<script>
	    document.getElementById("cod").focus();
</script>

</body>
</html>