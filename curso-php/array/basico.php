<title class="titulo">
    Array
</title>

<?php
    $lista = array(1, 2, 3.4, "texto");
    echo $lista . '<br>';
    var_dump($lista);
    echo '<br>';
    print_r($lista);
    echo '<br>';

    echo $lista[0];
    echo '<br>';
    echo $lista[1];
    echo '<br>';
    echo $lista[2];
    echo '<br>';
    echo $lista[3];

    $texto = 'Esse eh um texto de teste';
    echo '<br>';
    echo $texto[0];
    echo '<br>';
    echo $texto[2];
    echo '<br>';
    echo $texto[11];]
    echo '<br>';
    echo mb_substr($texto, 10, 1);