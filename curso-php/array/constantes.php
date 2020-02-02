<div class="titulo">
    Arrays Constantes
</div>

<?php
    // PHP você não consegue altera as constates, como em JS
    const FRUTAS = array('Laranja', 'Abacaxi');
    echo FRUTAS[0];
    // Não permitido
    // FRUTAS[0] = 'banana';
    // FRUTAS[] = 'banana';
    echo '<br>';

    const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
    echo CARROS["Fiat"];
    // Não permitido
    // CARROS["BMW"] = '325i';
    echo '<br>';

    define('CIDADES', array('Belo Horizonte', 'Recife'));
    // Não permitido
    // CIDADES[0] = 'Rio de Janeiro';
    echo CIDADES[1];
    echo '<br>';