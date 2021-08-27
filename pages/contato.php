<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
	<style type="text/css">
	body {
		background-color: bisque;
	}
	input[type=text],
    input[type=email]{
	width: 700px;
	height: 40px;
	border:1px solid #ccc;
	margin-bottom: 15px;
	padding-left: 8px;
}
	textarea{
	width: 700px;
	height: 200px;
	border:1px solid #ccc;
	margin-bottom: 15px;
	padding:10px;
	resize: vertical;
}
	</style>
</head>
<body>

	<section class="contato">
		<div class="container">
			<div class="w60formulario">
				<h2>Qualquer sugestão ou crítica, entre em contato preenchendo os dados abaixo.</h2>
				<form method="post">
					<div class="w50">
						<input placeholder="Nome..." type="text" required />
					</div>
					<div class="w50">
						<input placeholder="Sobrenome..." type="text" required />
					</div>
					<div class="w100">
						<input placeholder="E-mail" type="email" required />
					</div>
					<div class="w100">
						<textarea placeholder="Sua mensagem..."></textarea>
					</div>
				</form>
			</div>

			
		</div>
	</section>

</body>
</html>
