<?php
$conn = new PDO('mysql:host=localhost; dbname=bd_1029', 'max', 'maxx');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['sel_id'])) {
	$id = $_POST['sel_id'];
	$sql = "DELETE FROM usuario WHERE id=?";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1, $id);

	$res = $stmt->execute();
	if ($res) {
		echo ("Removido com sucesso!");
	} else {
		echo ("Erro durante a remoção");
	}
}

$sql = "SELECT id FROM usuario";
$linhas = $conn->query($sql);
?>

<html>
<head>
	<title>Exemplo de remoção de usuário</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<form method="POST" action="">
		<div class="form-group">
			<label for="exampleInputId">Id do usuário</label>
			<select id="exampleInputId" name="sel_id" class="form-control">
				<?php
				foreach ($linhas as $linha) {
					echo ("<option value='" . $linha['id'] . "'>" . $linha['id'] . "</option>");
				}
				?>
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</body>
</html>