<?php  
	$userhost = "localhost";
	$username = "root";
	$password = "";
	$database = "fseletron";

	$conn = mysqli_connect($userhost, $username, $password, $database);

	if (!$conn) {
		die("Ocorreu uma falha ao conectar com o banco Error: ". mysqli_connect_error());
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Produtos - Full Stack Eletro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="js/funcoes.js" type="text/javascript"></script>
</head>
<body>
	<!-- Menu -->
	<?php include("menu.html") ?>

	<header>
		<h2>Produtos</h2>
	</header>

	<hr>

	<section class="categorias">
		<h3>Categorias</h3>
		<ul>
			<li onclick="todosProdutos()" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)">Todos (12)</li>
			<li onclick="exibir_categoria('geladeira')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="geladeira">Geladeiras (3)</li>
			<li onclick="exibir_categoria('fogao')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="fogao">Fogões (2)</li>
			<li onclick="exibir_categoria('micro-ondas')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="micro-ondas">Microondas (3)</li>
			<li onclick="exibir_categoria('lavadora de roupas')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="lavadora de roupas">Lavadoura de roupas (2)</li>
			<li onclick="exibir_categoria('lava-louça')" onmouseover="sobreCategoria(this)" onmouseout="foraCategoria(this)" id="lava-louça">Lava-louças (2)</li>
		</ul>

	</section>

	<section class="produtos">

	<?php
		$sql = "select * from produtos";
		$result = $conn->query($sql);

		if ($result && $result->num_rows > 0) {
			while ($row = $result->fetch_assoc()){
	?>  
		<div class="box_produto" id="<?php echo $row['nome_produto'] ?>" style="display:inline-block">
			<img width="120px" src="<?php echo $row['imagem'] ?>" onclick="zoomProduto(this)">
			<br>
			<p class="descricao"><?php echo $row['descricao'] ?></p>
			<hr>
			<p class="descricao"><strike> R$ 6.389,00</strike></p>
			<p class="preco">R$ <?php echo $row['preco'] ?></p>
			<a href="./pedido.php">Fazer meu pedido</a>
		</div>
	<?php
			}	
		}else{
			echo "Nunhum produto encontrado";
		}
	?>	
		

	<!-- Rodapé -->
    <?php include("rodape.html") ?>
    
</body>
</html>






