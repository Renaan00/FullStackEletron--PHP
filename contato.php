<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Contato - Full Stack Eletro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	
	<!-- Menu -->
	<?php include("menu.html") ?>

	<header>
		<h2>Fale Conosco</h2>
	</header>

	<hr>

	<section class="contatos">
		<div class="box_contato">
			<img width="35px" src="./icon_email.png">
			<p>contato@fullstackeletro.com</p>
		</div>
		<div class="box_contato">
			<img width="45px" src="./icon_tel.jpg">
			<p>(11) 99999-9999</p>
		</div>
	</section>

	<form>
		<h4>Nome: </h4>
		<input type="text" style="width: 400px;">
		<h4>Mensagem: </h4>
		<textarea style="width: 400px;"></textarea>

		<input type="submit" value="Enviar">
	</form>

	<br><br><br><br><br>
	<br><br><br><br><br>
	<br>

	<!-- Rodapé -->
    <?php include("rodape.html") ?>

</body>
</html>