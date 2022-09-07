<?php
require_once 'Animais.php';
class Mamifero extends Animais {
	private $idade;
	private $cor;

	public function getIdade() {
		return $this->idade;
	}

	public function setIdade($idade): void {
		$this->idade = $idade;
	}

	public function getCor() {
		$this->cor = $cor;
	}

	public function setCor($cor): void {
		$this->cor = $cor;
	}

}

?>