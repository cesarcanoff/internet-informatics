<?php

require_once 'index.php';
$p1 = new Pessoa;

$altura = $_POST['altura'];
$p1->setAltura($altura);

$peso = $_POST['peso'];
$p1->setPeso($peso);

$nome = $_POST['nome'];
$p1->setNome($nome);


$saida = $p1->mostrarIMC($peso, $altura);
$saida = number_format($saida, 2, '.', ',');
echo '<div class="box_child">'.'<strong>FÓRMULA IMC:</strong> PESO / ALTURA² <br><br>'.'IMC = '.$saida.'</div>';
?>