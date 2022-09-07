<?php

require_once 'Ave.php';
require_once 'index.php';
require_once 'Mamifero.php';

$a = new Ave;
$m = new Mamifero;

$nome_a = $_POST['ave_nome'];
$peso_a = $_POST['ave_peso'];
$a->setNome($nome_a);
$a->setPeso($peso_a);

$nome_m = $_POST['m_nome'];
$idade_m = $_POST['m_idade'];
$m->setNome($nome_m);
$m->setIdade($idade_m);


echo '<div class="saida">'.'-------- AVE -------- <br>
Nome = '.$a->getNome().'<br>'.
'Peso = '.$a->getPeso().'<br>'.
'-------- MAMÍFERO -------- <br>
Nome = '.$m->getNome().'<br>'.
'Idade = '.$m->getIdade().'</div>';

?>