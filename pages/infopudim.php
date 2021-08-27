<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		body{
			background-color: bisque;
		}
		.tabela {
			background-color: grey;
		}

		.titulo{
			text-align: center;
		}

		table {
			margin: auto;
		}
	</style>
</head>
<body>

	<p><h1 class="titulo">INFORMAÇÕES DO PRODUTO</h1></p>
</br>
</br>

<?php 
$pudim = array( 
 
 
0 => array("Origem" => "Sul de Minas - Guaxupé", "Fabricado" => 20102019, "Validade" => 22112022, 
"Preco" => 29.00,), 

); 
 
 
?> 
<table border="1"> 
<th class="tabela">ORIGEM</th> 
<th class="tabela">DATA DE FABRICAÇÃO</th> 
<th class="tabela">DATA DE VALIDADE</th>
<th class="tabela">PREÇO</th>

 
 
  
<?php 
foreach($pudim as $item) { 
echo "<tr>"; 
echo " <td>" . $item["Origem"] . "</td>"; 
echo " <td> " . $item["Fabricado"] . "</td>";
echo " <td> " . $item["Validade"] . "</td>";
echo " <td>R$ " . $item["Preco"] . "</td>";



} 
?> 



	</table>

</body>
</html>