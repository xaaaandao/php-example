<div class="titulo">
    Visibilidade
</div>

<?php
    class A {
        public $public = 'Público';
        protected $protected = 'Protegido';
        private $private = 'Privado';

        public function mostrarA(){
            //$this->naoMostrar();
            echo "Class A) Public = {$this->public}<br>";
            echo "Class A) Protegido = {$this->protected}<br>";
            echo "Class A) Privado = {$this->private}<br>";
        }

        protected function vaiPorHeranca(){
            echo "Serei transmitido por herança!<br>";
        }
        
        private function naoMostrar(){
            echo "Não vou imprimir!<br>";
        }
    }

    $a = new A();
    /**
     * Não funciona porque é protegido
     * echo $a->protected;
     */
    $a->mostrarA();
    // $a->naoMostrar();
    echo "Fim!<br>";

    class B extends A {
        public function mostrarB(){
            echo "Class B) Public = {$this->public}<br>";
            echo "Class B) Protegido = {$this->protected}<br>";
            echo "Class B) Privado = {$this->private}<br>";
            parent::vaiPorHeranca();
        }
    }

    $b = new B();
    $b->mostrarB();
    $b->mostrarA();
    $b->naoMostrar();
    