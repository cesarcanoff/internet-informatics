<?php
try {
	$conn = new PDO('mysql:host=localhost; dbname=bd_1029', 'max', 'maxx');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$idUsuario = 6;
	$sql = "DELETE FROM usuario WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(1, $idUsuario);

	$stmt->execute();
} catch (PDOException $e) {
	die("A conexão falhou: " . $e->getMessage());
}