<?php

class Veiculo {
	protected $placa;
	protected $ano;

	public function getPlaca() {
		return $this->placa;
	}

	public function setPlaca($placa): void {
		$this->placa = $placa;
	}

	public function getAno() {
		$this->ano = $ano;
	}

	public function setAno($ano): void {
		$this->ano = $ano;
	}
}