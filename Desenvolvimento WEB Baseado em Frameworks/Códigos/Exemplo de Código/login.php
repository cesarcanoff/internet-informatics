<?php
if (isset($_POST['usuario'])) {
	try {
		$conn = new PDO('mysql:host=localhost; dbname=bd_1029', 'max', 'maxx');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$nome_html  = $_POST['usuario'];
		$senha_html = $_POST['senha'];

		$sql = "SELECT * from usuario WHERE nome LIKE ? AND senha LIKE ?";

		$stmt =  $conn->prepare($sql);
		$stmt->bindParam(1, $nome_html);
		$stmt->bindParam(2, $senha_html);

		$stmt->execute();
		$res = $stmt->rowCount();

		if ($res == 0) {
			echo ("Usuário ou senha inválidos");
		} else {
			$res = $stmt->fetchAll();
			foreach ($res as $linha) {
				echo ('Id: ' . $linha['id']) . '<br/>';
				echo ('Nome: ' . $linha['nome']) . '<br/>';
				echo ('Senha: ' . $linha['senha']) . '<br/>';
			}

			echo ("Sucesso na autenticação");
		}
	} catch (PDOException $e) {
		die("A conexão falhou: " . $e->getMessage());
	}
}
?>

<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<form method="POST" action="login.php">
		<div class="form-group">
			<label for="exampleInputUser">Usuário</label>
			<input type="text" class="form-control" id="exampleInputUser" name="usuario" placeholder="Usuário">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>