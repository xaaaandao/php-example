<div class="titulo">
    Membros Estáticos
</div>

<?php
    class A {
        public $naoStatic = 'Variável de instância';
        public static $static = 'Variável de classe';

        public function mostrarA(){
            echo "Não estática = {$this->naoStatic}<br>";
            // Tentativa 1
            echo "Estática = {$this->static}<br>";
            // Tentativa 2
            echo "Estática = {self::$static}<br>";
            // Tentativa 3
            echo "Estática = ".self::$static."<br>";
        }

        public static function mostrarStaticA() {
            // Não funciona, this não está disponível
            // echo "Não estática = {$this->naoStatic}<br>";
            // Dentro de uma função estática, só mostra membros estáticos
            echo "Estática = ".self::$static."<br>";
        }
    }

    $objetoA = new A();
    $objetoA->mostrarA();
    // Não é a melhor forma
    $objetoA->mostrarStaticA();

    // Melhor forma
    A::mostrarStaticA();
    echo A::$static, '<br>';
    
    A::$static = 'Alterando membro de classe!<br>';
    echo A::$static;