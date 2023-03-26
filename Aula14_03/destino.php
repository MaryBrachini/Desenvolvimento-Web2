<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Praticando 5</title>
	<style>
		h1 {
			border-bottom: solid 1px gray;
			padding-bottom: 1%;
			margin-bottom: 2%;
		}
	</style>
</head>

<body>
	<h1>Destino</h1>

	<h3>Dados da requisição:</h3>

	<h3>Interesses relacionados em ordem alfabetica</h3>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		// Cria um array para armazenar os valores das checkboxes selecionadas
		$checkboxes_selecionadas = array();

		// Verifica se o parâmetro 'checkbox' foi enviado no formulário
		if (isset($_POST['checkbox'])) {

			// Percorre o array de checkboxes e adiciona os valores selecionados ao array $checkboxes_selecionadas
			foreach ($_POST['checkbox'] as $checkbox_selecionada) {
				array_push($checkboxes_selecionadas, $checkbox_selecionada);
			}
		}

		// Exibe os valores das checkboxes selecionadas
		echo "<p>As checkboxes selecionadas são: </p>";
		foreach ($checkboxes_selecionadas as $checkbox_selecionada) {
			echo $checkbox_selecionada . " ";
		}
	}

	?>

	<a type="button" class="btn btn-danger" href="/index.html">Voltar ao Menu</a>
	<a type="button" class="btn btn-warning" href="p5.php">Voltar ao Formulario</a>
</body>

</html>