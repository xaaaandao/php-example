<div class="titulo">
    Construtor e Destrutor
</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;

        // 18 é o valor padrão
        function __construct($novoNome, $idade = 18){
            echo 'Construtor invocado! <br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo 'E morreu! <br>';
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos <br>";
        }
    }

    $pessoaA = new Pessoa('Rebeca Maria', 40);
    $pessoaA->apresentar();

    // $pessoa = new Pessoa(); // Problema

    // Chama o destrutor
    unset($pessoaA);

    $pessoaB = new Pessoa('João Pedro', 13);
    $pessoaB->apresentar();

    // $pessoa = new Pessoa(); // Problema

    // Chama o destrutor
    unset($pessoaB);

    