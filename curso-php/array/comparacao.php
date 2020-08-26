<div class="titulo">
    Comparação Arrays
</div>

<?php
    $arr1 = ['nome' => 'Maria', 'idade' => 20];
    $arr2 = ['nome' => 'Maria', 'idade' => 20];

    var_dump($arr1 == $arr2);
    echo '<br>';
    var_dump($arr1 === $arr2);

    $arr3 = ['idae' => 20, 'nome' => 'Maria'];
    echo '<br>';
    var_dump($arr1 == $arr3);
    echo '<br>';
    // Porque a ordem importa
    var_dump($arr1 === $arr3);

    echo '<br>';
    var_dump($arr1 != $arr3);
    echo '<br>';
    var_dump($arr1 !== $arr3);

    $arr4 = ['idade' => '20', 'nome' => 'Maria'];
    // Mesmo com tipos diferentes, é igual
    var_dump($arr1 == $arr4);
    echo '<br>';