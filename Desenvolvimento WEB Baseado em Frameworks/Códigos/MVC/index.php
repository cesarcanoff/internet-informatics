<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />
	<meta charset="UTF-8">
	<title>Formulário</title>
</head>
<body>
	<h1>Sistema comercial super ultra mega legal</h1>
	<a href="index.php?classe=Usuario&metodo=cadastro">
		Cadastro de usuario
	</a>
	<?php
	// O que será incluído na página
	if (isset($_GET['classe'])) {
		$classe = $_GET['classe'] . "Controller";
		$metodo = $_GET['metodo'];
		include_once 'controller/' . strtolower($classe) . '.php';

		$obj = new $classe();
		$obj->$metodo();
	}
	?>
</body>
</html>