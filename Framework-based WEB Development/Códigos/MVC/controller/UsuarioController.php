<?php

class UsuarioController {
	public function __construct() {
		require_once "model/Usuario.php";
	}

	// Responsável por abrir a página de cadastro/edição
	public function cadastro() {
		$acao = "index.php?classe=Usuario&metodo=salvar";
		$usuario = new Usuario(0, "", "");
		$resultado = "";

		include_once "view/UsuarioCadastrarView.php";
	}

	// CRUD
	public function salvar() {
		$nome = $_POST["txt_nome"];
		$senha = $_POST['txt_senha'];

		$usuario = new Usuario(0, $nome, $senha);

		$usuario->salvar();

		$resultado = '<div class="alert alert-success alert-dismissible"
										role="alert">
										Sucesso no cadastro
										<button
											type="button"
											class="close"
											data-dismiss="alert"
											aria-label="Close">
            						<span aria-hidden="true">
													&times;
												</span>
          					</button>
                	</div>';

		include_once "view/UsuarioCadastrarView.php";
	}
}
