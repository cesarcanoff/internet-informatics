<!DOCTYPE html>
<?php
setcookie("usuario", "Marcos Milho", time() + 3600, "/");
echo ("valor do cookie: " . $_COOKIE['usuario']);
?>

<html>

<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
</head>

<body>
	<h1>Multiplicar dois números</h1>
	<form action="enviar.php" method="POST">
		<div>
			<label>Número 1</label>
			<input type="number" name="n1" />
		</div>
		<div>
			<label>Número 2</label>
			<input type="number" min="0" name="n2" />
		</div>

		<input type="submit" value="Enviar" />
	</form>
</body>

</html>