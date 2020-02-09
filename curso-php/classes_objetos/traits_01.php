<div class="titulo">
    Traits #01
</div>

<?php
    trait validacao {
        public $a = 'Valor a';
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public $b = 'Valor b';
        public $c = 'Valor c';
        public function validarStringMelhor($str) {
            return isset($str) && trim($str);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor;

        public function imprimirValorC() {
            echo $this->c;
        }
    }

    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validarStringMelhor(' '));
    echo '<br>';
    echo $usuario->a, '<br>', $usuario->b, '<br>';
    $usuario->imprimirValorC();
