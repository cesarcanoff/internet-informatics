<?php
include_once "model/Produto.php";
?>

<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <?php echo $resultado; ?>
    <form method="POST" action="<?php echo $acao ?>">
        <div class="form-group">
            <input type="hidden" name="txt_id" value="<?php echo $usuario->id ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputNome">Nome</label>
            <input type="text" class="form-control" id="exampleInputNome" name="txt_nome" placeholder="nome do usuário" value="<?php echo $usuario->nome ?>">

        </div>
        <div class="form-group">
            <label for="exampleInputSenha">Senha</label>
            <input type="password" class="form-control" id="exampleInputsenha" name="txt_senha" value="<?php echo $usuario->senha ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>