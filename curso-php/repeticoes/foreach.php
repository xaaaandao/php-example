<div class="titulo">
    Foreach
</div>

<?php
    $array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    
    foreach($array as $valor){
        echo "$valor <br>";
    }

    echo '<hr>';

    foreach($array as $indice => $valor){
        echo "$indice => $valor <br>";
    }

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    echo '<hr>';

    foreach($matrix as $linha){
        // echo "$linha <br>";
        foreach($linha as $letra){
            echo "$letra ";
        }
        echo "<br>";
    }

    $numeros = [1, 2, 3, 4, 5];
    # & => pega o endereço
    foreach($numeros as &$dobrar) {
        $dobrar *= 2;
        echo "$dobrar <br>";
    }

    // Muda os valores do próprio array
    print_r($numeros);