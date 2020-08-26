<div class="titulo">
    Interface
</div>

<?php
    /**
     * Se criar uma classe cachorro vai estar
     * aderente a está interface
     * É obrigatório ter a função respirar
     * */

    interface Animal {
        function respirar();
    }

    interface Mamifero {
        function mamar();
    }

    interface Canino extends Animal, Mamifero{
        // Retorno é uma string
        function latir(): string;
    }

    interface Felino {
        function correr();
    }

    // Uma classe só pode herdade de uma classe
    class Cachorro implements Canino {
        function respirar() {
            return "Irei usar oxigênio!<br>";
        }

        function latir(): string{
            return 'Au Au<br>';
        }

        function mamar(){
            return 'Irei usar leite!<br>';
        }

        function correr(){
            return 'VRUM!<br>';
        }
    }

    $animal = new Cachorro();
    echo $animal -> respirar();
    echo $animal -> latir();
    echo $animal -> mamar();
    echo $animal -> correr();

    var_dump($animal);
    echo '<br>';
    
    var_dump($animal instanceof Cachorro);
    echo '<br>';
    var_dump($animal instanceof Canino);
    echo '<br>';
    var_dump($animal instanceof Mamifero);
    echo '<br>';
    var_dump($animal instanceof Animal);
    echo '<br>';
    var_dump($animal instanceof Felino);
    echo '<br>';

    echo 'Fim!<br>';
    
    