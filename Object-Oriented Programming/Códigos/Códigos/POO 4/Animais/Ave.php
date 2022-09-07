<?php
require_once 'Animais.php';
class Ave extends Animais{
	private $tamanho;
	private $peso;

	public function getTamanho(){
		return $this->tamanho;
	}
	public function setTamanho($tamanho): void {
		$this->tamanho = $tamanho;
	}

	public function getPeso(){
		return $this->peso;
	}

	public function setPeso($peso): void {
		$this->peso = $peso;
	}
	
}

?>