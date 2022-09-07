<?php
$conn = new PDO('mysql:host=localhost; dbname=bd_1029', 'max', 'maxx');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['txt_nome'])) {
	$id = $_POST['txt_id'];
	$novoNome = $_POST['txt_nome'];
	$novaSenha = $_POST['txt_senha'];

	if ($novoNome == "" && $novaSenha == "") {
		echo ("nada a atualizar");
		return;
	}

	$sql = "UPDATE usuario SET ";
	if ($novoNome != "")
		$sql = $sql . "nome= ?";
	$caso = 1; // Somente Nome
	if ($novoNome != "" && $novaSenha != "") {
		$sql = $sql . ", senha=?";
		$caso = 3; // Nome e Senha
	} else if ($novaSenha != "") {
		$sql = $sql . " senha=?";
		$caso = 2; // Somente Senha
	}

	$sql = $sql . " WHERE id=?";
	/* 
		Se tiver dúvidas nos if's acima,
		imprima a var sql e vá testando informando:
		nome e senha, somente nome, somente senha,
		nenhum valor.
	*/

	$stmt = $conn->prepare($sql);
	if ($caso == 1) {
		$stmt->bindParam(1, $novoNome);
		$stmt->bindParam(2, $id);
	} else if ($caso == 2) {
		$stmt->bindParam(1, $novaSenha);
		$stmt->bindParam(2, $id);
	} else {
		$stmt->bindParam(1, $novoNome);
		$stmt->bindParam(2, $novaSenha);
		$stmt->bindParam(3, $id);
	}

	$res = $stmt->execute();
	if ($res) {
		echo ("Atualizado com sucesso!");
	} else {
		echo ("Erro durante a atualização");
	}
}

?>

<html>
<head>
	<title>Exemplo de atualização de usuário</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
	<form method="POST" action="">
		<div class="form-group">
			<label for="exampleInputId">Id</label>
			<input type="number" class="form-control" id="exampleInputId" name="txt_id" placeholder="identificador do usuário" />
		</div>
		<div class="form-group">
			<label for="exampleInputNome">Nome</label>
			<input type="text" class="form-control" id="exampleInputNome" name="txt_nome" placeholder="nome do usuário" />
		</div>
		<div class="form-group">
			<label for="exampleInputSenha">Senha</label>
			<input type="password" class="form-control" id="exampleInputSenha" name="txt_senha" />
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</body>
</html>