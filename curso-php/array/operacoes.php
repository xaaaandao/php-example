<div class="titulo">
    Operações
</div>

<?php
    $dados1 = [
        "nome" => "Jose",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];

    $dados["endereco"] = "Rua A";

    /* Se tiver nome em dados2 o que prevalece é do dados1 */
    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);
    echo '<br>';
    // 1 -> É array
    echo is_array($dadosCompletos);
    echo '<br>';
    echo count($dadosCompletos);
    echo '<br>';

    $indice = array_rand($dadosCompletos);
    echo "$indice = $dadosCompletos[$indice]";
    echo '<br>';
    echo "{$dadosCompletos['idade']}";
    echo '<br>';
    echo "${dadosCompletos['idade']}";
    echo '<br>';

    // Remover elementos
    unset($dadosCompletos["nome"]);
    echo '<br>';
    print_r($dadosCompletos);

    unset($dadosCompletos);
    echo '<br>';
    print_r($dadosCompletos);
    echo '<br>';
    var_dump($dadosCompletos);

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];
    
    // Prioridade ao lado esquerdo
    $decimais = $pares + $impares;
    echo '<br>';
    print_r($decimais);

    $decimais = array_merge($pares, $impares);
    echo '<br>';
    print_r($decimais);

    // Altera array original
    sort($decimais);
    echo '<br>';
    print_r($decimais);