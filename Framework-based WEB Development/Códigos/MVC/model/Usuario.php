<?php
class Usuario
{
	private $id;
	private $nome;
	private $senha;

	public function __construct($id, $nome, $senha)
	{
		require_once "model/database_utils.php";

		$this->id = $id;
		$this->nome = $nome;
		$this->senha = $senha;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	// Métodos de CRUD
	public function salvar()
	{
		if ($this->getId() == 0) {
			$sql = "INSERT INTO usuario (nome, senha) VALUES (?,?)";
			$conn = DataBaseUtils::getConnection();

			$stmt = $conn->prepare($sql);
			$stmt->bindValue(1, $this->getNome());
			$stmt->bindValue(2, $this->getSenha());

			$stmt->execute();
		}
	}
}
