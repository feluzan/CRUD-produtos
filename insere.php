<?php
include_once("header.php");
?>

<div class="container">


<form action="action_insere.php" method="POST">
	<input hidden name="todo" value="insere" />

	<div class="input">Código: <input type="text" name="codigo" id="cod"/> </div>
	<script type="text/javascript">
		// Get the input field
		var input = document.getElementById("cod");
		// Execute a function when the user releases a key on the keyboard
		input.addEventListener("keydown", function(event) {
		  // Number 13 is the "Enter" key on the keyboard
		  if (event.keyCode === 13) {
		  	// alert("Teste");
		    // Trigger the button element with a click
		    //document.getElementById("myBtn").click();

		    // Cancel the default action, if needed
		    event.preventDefault();
		  }
		});
		

	</script>

	
	<div  class="input">Nome: <input type="text" name="nome" /> </div>
	
	<div  class="input">Preço de custo: <input type="text" name="custo" /> </div>
	
	<div  class="input">Preço de venda: <input type="text" name="venda" /> </div>

	<div  class="input">Estoque: <input type="text" name="estoque" /> </div>
	
	<input class="submit-btn" type="submit" value="Cadastrar"/>

</form>
<script>
	    document.getElementById("cod").focus();
</script>

<a class="my-a" href="index.php"><div class="home-btn">Voltar ao início</div></a>

</div>


</body>
</html>