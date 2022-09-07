<?php      
	class Produto {
		private $id;
		private $nome;
		private $valor;

		public function __construct($idPadrao, $nomePadrao, $valorPadrao ) {
			$this->id = $idPadrao;
			$this->nome = $nomePadrao;
			$this->valor = $valorPadrao;
		}

		public function getId() {
			return $this->id;
		}

		public function getNome() {
			return $this->nome;
		}

		public function getValor() {
			return $this->valor;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function setValor($valor) {
			$this->valor = $valor;
		}
	}
