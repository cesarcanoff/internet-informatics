<?php
require_once 'Pessoa.php';
class PessoaJuridica extends Pessoa {
	//Atributos...
	private $cnpj;
	private $endereco;

	public function getCNPJ(){
		return $this->cnpj;
	}

	public function setCNPJ($cnpj): void{
		$this->cnpj = $cnpj;
	}

	public function getEndeco(){
		return $this->endereco;
	}

	public function setEndereco($endereco): void{
		$this->endereco = $endereco;
	}

}
?>