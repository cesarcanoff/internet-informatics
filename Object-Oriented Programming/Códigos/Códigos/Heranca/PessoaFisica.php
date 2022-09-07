<?php

require_once 'pessoa.php';

class PessoaFisica extends Pessoa{
	protected $cpf;

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	
}


?>