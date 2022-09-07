<?php
include_once "produto.php";
session_start();

function gen_item_name($pos)
{
  $nomes = array("Monitor", "Memória RAM", "Microprocessador", "Gabinete", "Headset");
  return $nomes[$pos];
}

$produtos = array();
$_SESSION['batatinha'] = 0;

if (!isset($_SESSION['listaProdutos'])) {

  for ($i = 0; $i < 4; $i++) {
    $p = new Produto($i + 1, gen_item_name(rand(0, 4)), rand(10, 20));
    array_push($produtos, $p);
  }
  $_SESSION['listaProdutos'] = $produtos;
} else {
  $produtos = $_SESSION['listaProdutos'];
}

if (isset($_POST['txt_id'])) {
  $p = new Produto($_POST['txt_id'], $_POST['txt_nome'], $_POST['txt_valor']);
  array_push($produtos, $p);
  $_SESSION['listaProdutos'] = $produtos;
}





?>

<html>

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <form method="POST" action="">
    <div class="form-group">
      <label for="exampleInputId">Id</label>
      <input type="number" class="form-control" id="exampleInputId" name="txt_id" placeholder="identificador do produto">
    </div>
    <div class="form-group">
      <label for="exampleInputNome">Nome</label>
      <input type="text" class="form-control" id="exampleInputNome" name="txt_nome" placeholder="nome do produto">
    </div>
    <div class="form-group">
      <label for="exampleInputValor">Valor</label>
      <input type="number" class="form-control" id="exampleInputvalor" name="txt_valor" placeholder="preço do produto">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Alterar</th>
        <th scope="col">Remover</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //linhas
      $valorTotal = 0.0;
      for ($i = 0; $i < count($produtos); $i++) {
        echo ("<tr>");
        //colunas

        for ($j = 0; $j < 3; $j++) {
          switch ($j) {
            case 0:
              echo ("<th scope='row'>" . $produtos[$i]->getId() . "</th>");
              break;
            case 1:
              echo ("<td>" . $produtos[$i]->getNome() . "</td>");
              break;
            case 2:
              echo ("<td>" . $produtos[$i]->getValor() . "</td>");
              $valorTotal = $valorTotal + $produtos[$i]->getValor();
              break;
            default:
              echo ("<td>Ooooops, coluna inválida</td>");
              break;
          }
        }

        echo ("<td><a href='alterar.php?" . $produtos[$i]->getId() . "'>Alterar</a></td>");
        echo ("<td><a href='remover.php?" . $produtos[$i]->getId() . "'>Remover</a></td>");
        echo ("</tr>");
      }

      echo ("<td> <b>Preço Total:</b> " . $valorTotal . "</td>");
      ?>

    </tbody>
  </table>
</body>
</html>