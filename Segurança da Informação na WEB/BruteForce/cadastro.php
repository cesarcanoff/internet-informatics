<!DOCTYPE html>
<html lang="pt">

<head>


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="stylesheet.css">

	<script>

	 
	</script>

	<title>Página ultra mega segura 3000</title>

</head>
<body >

<?php
	require_once "cifra.php";

	$strConn = "pgsql:host=localhost;port=5432;dbname=lp;user=max;password=max";

	$conn = new PDO($strConn);
	$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

	$result = "";


	if( isset($_POST['txt_usuario']) ){
		
		$sql = "INSERT INTO livraria.usuario (usuario, senha) VALUES (:user,:pass)";
		$ps = $conn->prepare($sql);

		$ps->bindValue(":user", $_POST['txt_usuario'] );
		$ps->bindValue(":pass", mb_convert_encoding(hash("sha1",$_POST['txt_senha']), "UTF-8", "HTML-ENTITIES"));
		try{
			$ps->execute();

			$result = '<div class="alert alert-success alert-dismissible fade show" role="alert">usuário inserido com sucesso <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
			</div>';
		}catch (PDOException $e){
			echo $e->getMessage();
			$result='<div class="alert alert-danger alert-dismissible fade show" role="alert">usuário ou senha inválidos <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
		</div>';
		}
	}
	


?>

<div class="container">
	<form action="" method="POST">
	  <div class="col-md-4 mb-3">
          <?php echo $result; ?>    
  	  </div>
	  <div class="col-md-4 mb-3">
	    <label for="txt_usuario">Usuário</label>
	    <input type="text" class="form-control" id="txt_usuario" name="txt_usuario"  placeholder="digite seu usuário">
	  </div>
	  <div class="col-md-4 mb-3">
	    <label for="txt_senha">Senha</label>
	    <input type="password" class="form-control" id="txt_senha" name="txt_senha" placeholder="digite sua senha">
	  </div>
	  
	  <div class="col-md-4 mb-3">
	  	<button type="submit" class="btn btn-primary">Cadastrar</button>
	  </div>
	</form>

</div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="bootstrap.min.js" ></script>

</body>
</html>

