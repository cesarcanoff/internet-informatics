<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8"> 
        <title>IMC - PHP</title>
        <style>
            body{
                font-family: Arial;
                background-color: #0c1429;
            }
            label{
                font-size: 14pt;
                color: whitesmoke;
            }
            .box_main{
                background-color: #232a44;
                margin-left: auto;
                margin-right: auto;
                margin-top: 200px;
                padding: 30px;
                width: 350px;
                height: 300px;

            }
            input{
                display: block;
            }
            .nome{
                border: none;
                width: 330px;
                border-radius: 10px;
                padding: 15px;
                margin-bottom: 10px;
            }
            .altura{
                border-radius: 10px;
                border: none;
                width: 330px;
                padding: 15px;
                margin-bottom: 10px;
            }
            .peso{
                border-radius: 10px;
                border: none;
                width: 330px;
                padding: 15px;
                margin-bottom: 10px;
            }
            .botao{
                margin-top: 15px;
                height: 50px;
                width: 361px;
                background-color:#0c1429;
                border: none;
                color: whitesmoke;
                font-weight: bold;
                font-size: 12pt;
            }
            .box_child{
                background-color: #232a44;
                width: 410px;
                color: whitesmoke;
                font-size: 15pt;
                height: 90px;
                text-align: center;
                cursor: pointer;
                margin-left: auto;
                margin-right: auto;
            }
        </style>

    </head>
    <body>
        <?php

        class Pessoa {

            public $altura;
            public $peso;
            public $nome;

            function __construct() {
                
            }

            public function getAltura() {
                return $this->altura;
            }

            public function getPeso() {
                return $this->peso;
            }

            public function getNome() {
                return $this->nome;
            }

            public function setAltura($altura): void {
                $this->altura = $altura;
            }

            public function setPeso($peso): void {
                $this->peso = $peso;
            }

            public function setNome($nome): void {
                $this->nome = $nome;
            }

            function mostrarIMC($peso, $altura) {
                $imc = $peso / ($altura ** 2);
                return $imc;
            }

        }
        ?>
        <div class="box_main">

            <form action="Dados.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" class="nome" value="" placeholder="Nome">
                <label>Altura</label>
                <input type="number" pattern="[0-99]+([,\.][0-99]+)?" step="any" min="0" name="altura" value="" class="altura" placeholder="Altura Ex: 1.55">
                <label>Peso</label>
                <input type="number" pattern="[0-99]+([,\.][0-99]+)?" step="any" min="0" name="peso" value="" class="peso" placeholder="Peso Ex: 60">
                <input type="submit" name="submit" value="Enviar" class="botao">
            </form>

        </div>

    </body>
</html>
