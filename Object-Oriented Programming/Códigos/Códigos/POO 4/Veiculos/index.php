<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pessoas - Principal</title>
	<style>
		body{
			text-align: center;
		}
		.saida{
			font-size: 18pt;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<form action="Dados.php" method="POST">
		<h3>Motocicleta</h3>
		<label>Placa</label>
		<input type="´text" name="placa_m">
		<label>Modelo</label>
		<input type="text" name="modelo_m">
		<h3>Automóvel</h3>
		<label>Placa</label>
		<input type="text" name="placa_a">
		<label>Cor</label>
		<input type="text" name="cor_a">
		<input type="submit" name="botao">
	</form>
	<hr>
</body>
</html>