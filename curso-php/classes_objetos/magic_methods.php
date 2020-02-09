<div class="titulo">
    Métodos Mágicos
</div>

<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo 'Construtor invocado!<br>';
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo 'E morreu!';
        }

        public function __toString(){
            return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentar() {
            echo $this . "<br>";
        }

        public function __get($atrib){
            echo "Lendo atributo não declarado: {$atrib}<br>";
        }
        
        public function __set($atrib, $valor){
            echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
        }

        public function __call($metodo, $params){
            echo "Tentando executar método ${metodo}<br>";
            echo "com os parâmetros: ";
            print_r($params);
        }
    }

    // Chamando o __construct
    $pessoa = new Pessoa('Ricardo', 40);
    $pessoa->apresentar(); // Chamando o __toString
    echo $pessoa, '<br>'; // Chamando o __toString
    $pessoa->nome='Reinaldo';
    // Chamando o método diretamten sem o call
    // Chamando o __toString
    $pessoa->apresentar(); 
    
    $pessoa->nomeCompleto = 'Muito Legal!!!'; // Chamando o __set
    $pessoa->nomeCompleto; // Chamando o __get
    echo $pessoa->nome, '<br>'; // Acessa o atributo diretamente sem __get

    // Chamando o __call, porque o método não existe no objeto
    $pessoa->exec(1, 'teste', true, [1, 2, 3]);

    // Chamando o __destruct
    $pessoa = null;