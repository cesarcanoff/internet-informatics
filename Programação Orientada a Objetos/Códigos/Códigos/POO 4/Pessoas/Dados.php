<style>
	.main{
		margin-top: 50px;
	}
</style>
<?php
// IMPORTAÇÕES...
require_once 'index.php';
require_once 'PessoaFisica.php';
require_once 'PessoaJuridica.php';

// INTANCIAMENTO...
$p1 = new PessoaFisica;
$p2 = new PessoaJuridica;

// PESSOA FÍSICA...
$pf_nome = $_POST['pf_nome'];
$pf_cpf = $_POST['pf_cpf'];
$p1->setNome($pf_nome);
$p1->setCpf($pf_cpf);

// PESSOA JURÍDICA...
$pj_nome = $_POST['pj_nome'];
$pj_cnpj = $_POST['pj_cnpj'];
$p2->setNome($pj_nome);
$p2->setCnpj($pj_cnpj);

// SAÍDA...
echo '<div class="saida">'.'---- PESSOA FÍSICA ----<br> 
Nome = '.$p1->getNome().
'<br> CPF = '.$p1->getCPF().
'<br>---- PESSOA JURÍDICA ----<br>
Nome = '.$p2->getNome().
'<br> CNPJ = '.$p2->getCNPJ().'</div>';

?>