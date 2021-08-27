<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<style type="text/css">
		
		footer{
	background-color: #eb3b5a;
	padding:15px 0;
	background: #e15f41;
	text-align: center;
	color: white;
	width: 100%;
	padding-bottom: 60px;
	margin-left: 0px;
	margin-right: 0px;
}

}
	</style>
	</head>
<body>

	<header>
		<img width="250px" height="200px" src="images/slogan.png" />

<a href="pages/quemsomos.php?pagina=quemsomos">
<button style="background: #e77f67; border-radius: 6px; width: 250px; height: 150px;"><h2>Quem somos</h2></button></a>

<a href="pages/contato.php?pagina=contato">
<button style="background: #e77f67; border-radius: 6px; width: 250px; margin-left: 200px; height: 150px;"><h2>Contato</h2></button></a>

<a href="pages/localizacao.php?pagina=localizacao">
<button style="background: #e77f67; border-radius: 6px; width: 250px; margin-left: 250px; height: 150px;"><h2>Localização</h2></button></a>


	</header>

	<section>
		<a href="pages/produtos.php?pagina=produtos">
		<button style="background: #e55039; border-radius: 6px; margin-top: 150px; margin-left: 700px; width: 300px; height: 200px;"><h1>PRODUTOS</h1></button></a>
	</section>

	<?php

		@$valor = $_GET['pagina'];

		if ($valor == "quemsomos") { require_once "pages/quemsomos.php";}
		if ($valor == "contato") { require_once "pages/contato.php";}
		if ($valor == "localizacao") { require_once "pages/localizacao.php";}
		if ($valor == "produtos") { require_once "pages/produtos.php";}




	?>
    </br>
    </br>

	<footer>
		<p><h3>Marcelo Bonfante Amadeu - 21002538-5</h3></p>
	</footer>

</body>
</html>