<?php

require_once "model/DatabaseUtils.php";

class Usuario
{
    private $id;
    private $nome;
    private $senha;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
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
        $conn = DataBaseUtils::getConnection();
        if ($this->getId() == 0) {
            $sql = "INSERT INTO usuario (nome, senha) VALUES (?,?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $this->getNome());
            $stmt->bindValue(2, $this->getSenha());
        } else {
            $sql = "UPDATE usuario SET nome=?, senha=? WHERE id=?";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $this->getNome());
            $stmt->bindValue(2, $this->getSenha());
            $stmt->bindValue(3, $this->getId());
        }
        $stmt->execute();
    }

    public static function listar()
    {
        $sql = "SELECT * FROM usuario";
        $conn = DataBaseUtils::getConnection();

        return $conn->query($sql)->fetchAll(PDO::FETCH_CLASS, __CLASS__); // Retorna todos
    }

    public static function buscar($id)
    {
        $sql = "SELECT * FROM usuario WHERE id like ?";
        $conn = DataBaseUtils::getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetchObject(__CLASS__); // Retorna o primeiro
    }
}
