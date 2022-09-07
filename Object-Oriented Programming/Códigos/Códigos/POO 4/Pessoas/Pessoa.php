<?php
class Pessoa{
	protected $nome;

	public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }
}
?>