<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		body {
			background-color: bisque;
		}

		header {
			text-align: center;
		}
	</style>
</head>
<body>

	<header><h1>PRODUTOS DISPONÍVEIS</h1></header>

		<section>

			<div>

			<img width="200" height="170" src="../images/figo.png" />	
			<a href="infofigo.php?pagina=infofigo"><button style="background: #e77f67; border-radius: 6px; margin-left: 100px; width: 200px; height: 110px;"><h2>Informações do produto</h2></button></a>
			
			</div>

			<div>
				
				<img width="282" height="150" src="../images/Pudim.png" />
				<a href="infopudim.php?pagina=infopudim"><button style="background: #e77f67; border-radius: 6px; margin-left: 100px; width: 200px; height: 110px;"><h2>Informações do produto</h2></button></a>


			</div>
			
			<div>
			<img width="300" height="220" src="../images/laranja.png" />
			<a href="infolaranja.php?pagina=infolaranja"><button style="background: #e77f67; border-radius: 6px; margin-left: 100px; width: 200px; height: 110px;"><h2>Informações do produto</h2></button></a>
			</div>

		</section>

		<?php

		@$valor = $_GET['pagina'];

		if ($valor == "infofigo") { require_once "infofigo.php";}
		



	?>


</body>
</html>