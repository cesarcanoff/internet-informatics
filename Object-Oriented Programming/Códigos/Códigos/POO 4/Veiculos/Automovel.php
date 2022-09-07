<?php
require_once 'Veiculo.php';
class Automovel extends Veiculo {
	private $cor;

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor): void {
		$this->cor = $cor;
	}
}
