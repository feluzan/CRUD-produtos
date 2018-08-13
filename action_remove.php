<?php

include_once("header.php");


$sql = "DELETE FROM produto WHERE id=".$_POST['id'] .";";
	if (mysqli_query($link, $sql)){
		?>
		<div>O produto <?php echo $_POST['nome'] ?> foi deletado com sucesso!<br>
		<?php
	}else{
		?>
		<div>Ocorreu uma falha ao deletar o produto <?php echo $_POST['nome'] ?>.<br>
		<?php
	}
	?>
	<a href="index.php">Clique aqui</a> para votlar ao início.<br>
	Ou então <a href="insere.php">clique aqui</a> para incluir um novo produto.</div>