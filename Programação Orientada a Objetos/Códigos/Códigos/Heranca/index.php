<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form method="POST" action="index.php" >
		<label>Digite o nome da pessoa</label>
		<input type="text" name="txt_nome_pessoa"/><br/>
		<label>Digite o nome da pessoa fisica </label>
		<input type="text" name="txt_nome_pessoa_fisica"/><br/>
		<input type="submit" value="Enviar"/>
	</form>

	<?php
		require_once 'pessoa.php';
		require_once 'PessoaFisica.php';

		$p = new Pessoa();
		$pf = new PessoaFisica();


		$p->setNome( $_POST['txt_nome_pessoa'] );

		$pf->setNome($_POST['txt_nome_pessoa_fisica']);

		echo($p->falar("murilo acaba de se complicar"));
		
	?>


</body>
</html>




