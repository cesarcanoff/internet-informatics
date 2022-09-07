<?php
session_start();

if (!isset($_SESSION['valor'])) {
  $_SESSION['valor'] = 1;
}

if (isset($_POST['txt_id'])) {
  $_SESSION['valor'] = $_POST['txt_id'];
}
?>

<html>

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <form method="POST" action="">
    <div class="form-group">
      <label for="exampleInputId">Id</label>
      <input type="number" class="form-control" id="exampleInputId" name="txt_id" placeholder="identificador do produto">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <?php
  if (isset($_SESSION['valor'])) {
    echo ("<div class='form-group'>");
    echo ($_SESSION['valor']);
    echo ("</div>");
  }
  ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>