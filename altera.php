<?php
	include_once("header.php");
?>
<div class="container">

<form action="action_altera.php" method="POST">

	<div class="input">Código: <input type="text" name="codigo" id="cod" /> </div>
	<input class="submit-btn" type="submit" value="Consultar pelo código"/>

</form>

<a class="my-a" href="index.php"><div class="home-btn">Voltar ao início</div></a>

</div>
<script>
	    document.getElementById("cod").focus();
</script>


</body>
</html>