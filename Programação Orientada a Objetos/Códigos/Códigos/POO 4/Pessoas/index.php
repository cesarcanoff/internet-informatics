<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pessoas - Principal</title>
  <style>
    body{
      text-align: center;
    }
    .saida{
      font-size: 18pt;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <h3>Pessoa Física</h3>
  <form action="Dados.php" method="POST">
   <label>Nome</label>
   <input type="text" name="pf_nome">
   <label>CPF</label>
   <input type="text" name="pf_cpf">
   <h3>Pessoa Jurídica</h3>
   <label>Nome</label>
   <input type="text" name="pj_nome">
   <label>CNPJ</label>
   <input type="text" name="pj_cnpj">
   <input type="submit" name="pj_botao">
 </form>
 <hr>
</body>
</html>