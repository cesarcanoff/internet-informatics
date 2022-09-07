<?php

require_once 'index.php';
require_once 'Motocicleta.php';
require_once 'Automovel.php';

$v1 = new Motocicleta;
$v2 = new Automovel;


$placa_m = $_POST['placa_m'];
$modelo_m = $_POST['modelo_m'];
$v1->setPlaca($placa_m);
$v1->setModelo($modelo_m);

$placa_a = $_POST['placa_a'];
$cor_a = $_POST['cor_a'];
$v2->setPlaca($placa_a);
$v2->setCor($cor_a);

echo '<div class="saida">'.'----- MOTOCICLETA -----<br>
Placa = '.$v1->getPlaca().'<br>
Modelo = '.$v1->getModelo().'<br>
---- AUTOMÓVEL ----<br>
Placa = '.$v2->getPlaca().'<br>
Cor = '.$v2->getCor().'</div>';

?>