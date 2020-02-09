<div class="titulo">
    Desafio Erros
</div>

<?php
    /*
        *** DESAFIO ***
        interface Template {
            function metodo1();
            public function metodo2($parametro);
        }

        abstract class ClasseAbstrata extends Template {
            public function metodo3(){
                echo "Estou funcionando";
            }
        }

        class Classe implements ClasseAbstrata {
            function __construct($parametro){
                
            }
        }

        $exemplo = Classe();
        $exemplo.metodo3();
    */

    /* RESPOSTA */
    interface Template {
        function metodo1();
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata implements Template {
        public function metodo1(){
        }

        public function metodo3(){
            echo "Estou funcionando";
        }
    }

    class Classe extends ClasseAbstrata {
        function __construct($parametro){
        }

        public function metodo2($parametro){
        }
    }

    $exemplo = new Classe('...');
    $exemplo->metodo3();