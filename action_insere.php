<?php

include_once("header.php");

?> <div class="container"><?php

if($_POST['todo']=='insere'){
	$sql_check = "SELECT * FROM produto WHERE codigo='" .  $_POST['codigo'] . "';";
	$ret = mysqli_query($link, $sql_check);

	if(mysqli_num_rows($ret)==0){
		$sql = "INSERT INTO produto (codigo, nome, custo, venda, estoque) VALUES ('" . $_POST['codigo'] . "', '" . $_POST['nome'] . "', " . toFloat($_POST['custo']) . ", " . toFloat($_POST['venda']) . ", " . $_POST['estoque'] . ");";

	//echo ($sql);

		if (mysqli_query($link, $sql)){
			?>
			<div class="msg-sucesso">O produto <span class="produto-nome"><?php echo $_POST['nome'] ?></span> foi inserido com sucesso!</div>
			<a class="my-a" href="index.php"><div class="home-btn">Voltar ao início</div></a>
			<a class="my-a" href="insere.php"><div class="home-btn">Cadastrar outro produto</div></a>
			<a class="my-a" style="" href="consuta.php"><div class="home-btn"> Consultar Preço</div></a>
			<a class="my-a" style="" href="altera.php"><div class="home-btn"> Alterar Produto</div></a>
			<?php
		}else{
			?>
			<div>Ocorreu uma falha ao cadastrar o produto <?php echo $_POST['nome'] ?>.<br>
				<a href="index.php">Clique aqui</a> para votlar ao início.<br>
				Ou então <a href="insere.php">clique aqui</a> para incluir um novo produto.</div>
			<?php

		}

	}else{
		?>
		<div class="msg-erro">Já existe um produto cadastrado com o código digitado.</div>
		<a class="my-a" href="index.php"><div class="home-btn">Voltar ao início</div></a>
		<a class="my-a" href="insere.php"><div class="home-btn">Cadastrar outro produto</div></a>
		<a class="my-a" style="" href="consulta.php"><div class="home-btn"> Consultar Preço</div></a>
		<a class="my-a" style="" href="altera.php"><div class="home-btn"> Alterar Produto</div></a>

		<?php
	}



	

}else if($_POST['todo']='altera'){
	$sql = "UPDATE produto SET nome='" . $_POST['nome'] . "', venda='" . toFloat($_POST['venda']) . "', custo='" . toFloat($_POST['custo']) . "', estoque='" . $_POST['estoque'] . "' WHERE id=".$_POST['id'] .";";
	if (mysqli_query($link, $sql)){
		?>
		<div>O produto <?php echo $_POST['nome'] ?> foi alterado com sucesso!<br>
		<?php
	}else{
		?>
		<div>Ocorreu uma falha ao alterar o produto <?php echo $_POST['nome'] ?>.<br>
		<?php
	}
	?>
	<a href="index.php">Clique aqui</a> para votlar ao início.<br>
	Ou então <a href="insere.php">clique aqui</a> para incluir um novo produto.</div>
	<?php

}



?></div>