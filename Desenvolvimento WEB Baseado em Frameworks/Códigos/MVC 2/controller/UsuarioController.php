<?php


class UsuarioController
{

	public function __construct()
	{
		require_once "model/Usuario.php";
	}

	// Responsável por abrir a página de cadastro/edição
	public function cadastro()
	{
		$acao = "index.php?classe=Usuario&metodo=salvar";
		$usuario = new Usuario();
		$resultado = "";

		include_once "view/UsuarioCadastrarView.php";
	}

	// Responsável por abrir a página de cadastro/edição
	public function listagem()
	{
		$acaoEditar = "index.php?classe=Usuario&metodo=edicao";
		$acaoRemover = "index.php?classe=Usuario&metodo=remover";

		$usuarios = Usuario::listar();
		$resultado = "";

		include_once "view/UsuarioCadastrarView.php";
	}

	public function edicao()
	{
		$acao = "index.php?classe=Usuario&metodo=editar";
		$resultado = "";
		$id = $_GET["id"];
		$usuario = Usuario::buscar($id);
		include_once "view/UsuarioCadastrarView.php";
	}

	// CRUD
	public function salvar()
	{
		$nome = $_POST["txt_nome"];
		$senha = $_POST['txt_senha'];

		$usuario = new Usuario();
		$usuario->nome = $nome;
		$usuario->senha = $senha;

		$usuario->salvar();

		$resultado = '<div class="alert alert-success alert-dismissible"
										role="alert">
										Sucesso no cadastro
										<button
											type="button"
											class="close"
											data-dismiss="alert"
											aria-label="Close">
            						<span
													aria-hidden="true">
													&times;
												</span>
          					</button>
                  </div>';

		include_once "view/UsuarioCadastrarView.php";
	}

	public function editar()
	{
		$id = $_POST['txt_id'];
		$nome = $_POST["txt_nome"];
		$senha = $_POST['txt_senha'];

		$usuario = new Usuario();

		$usuario->id = $id;
		$usuario->nome = $nome;
		$usuario->senha = $senha;

		$usuario->salvar();

		$resultado = '<div class="alert alert-success alert-dismissible"
										role="alert">
											Sucesso no cadastro
										<button
											type="button"
											class="close"
											data-dismiss="alert"
											aria-label="Close">
            					<span
												aria-hidden="true">
													&times;
											</span>
          					</button>
                  </div>';

		include_once "view/UsuarioCadastrarView.php";
	}
}
