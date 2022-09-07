<?php
require_once 'Veiculo.php';
class Motocicleta extends Veiculo {
	private $modelo;
	private $marca;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo): void {
		$this->modelo = $modelo;
	}

	public function getMarca() {
		return $this->marca;
	}

	public function setMarca($marca): void {
		$this->marca = $marca;
	}
	
}