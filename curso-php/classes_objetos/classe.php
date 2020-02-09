<div class="titulo">
    Primeira Classe
</div>

<?php
    class Cliente {
        /**
         * Atributos
         */
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar(){
            /*
            echo "
                Nome: {$this->nome}<br>
                Idade: {$this->idade}<br>
            ";
            */
            return "Nome: {$this->nome} Idade: {$this->idade}";
        }
    }

    $c1 = new Cliente();
    $c1->nome = 'Ana Silva';
    $c1->idade = 27.5;
    $c1->apresentar();

    $c2 = new Cliente;
    $c2->nome = 'Gabriel';
    $c2->idade = 43;
    $c2->apresentar();

    echo $c1->apresentar(), '<br>';
    echo $c2->apresentar(), '<br>';