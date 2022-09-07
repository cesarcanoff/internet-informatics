<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animais</title>
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
		<h3>Ave</h3>
		<label>Nome</label>
		<input type="text" name="ave_nome">
		<label>Peso</label>
		<input type="text" name="ave_peso">
		<h3>Mamífero</h3>
		<label>Nome</label>
		<input type="text" name="m_nome">
		<label>Idade</label>
		<input type="text" name="m_idade">
		<input type="submit" name="botao">
	</form>
	<hr>
</div>
</body>
</html>