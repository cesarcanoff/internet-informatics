<?php

class Pessoa{
	protected $nome;

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function falar($msg){
		return $this->nome." diz: ".$msg;
	}
}

?>