<?php
require_once 'Pessoa.php';
class PessoaFisica extends Pessoa {
	private $cpf;
	private $ano_nasc;

	public function getCPF(){
		return $this->cpf;
	}

	public function setCPF($cpf): void{
		$this->cpf = $cpf;
	}

	public function getAno(){
		return $this->ano_nasc;
	}

	public function setAno($ano_nasc): void{
		$this->ano_nasc = $ano_nasc;
	}

}
?>