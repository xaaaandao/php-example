<div class="titulo">
    Variáveis
</div>

<?php
    $numeroA = 13;
    echo $numeroA;
    echo '<br>';
    var_dump($numeroA);
    echo '<br>';

    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo $soma;
    # Válido
    EcHo '<br>';
    
    echo isset($soma);
    echo '<br>';
    unset($soma);
    echo '<br>';
    var_dump($soma);
    echo '<br>';

    $variavel = 10;
    echo $variavel;
    $variavel = "Agora sou uma string!";
    echo '<br>';

    # Nomes de variáveis
    $var = 'valida';
    $var2 = 'valida';
    $VAR3 = 'valida';
    $_var4_ = 'valida';
    $vâr5 = 'valida'; # evitar
    // $6var = 'invalido';
    // $%var7 = 'invalido';
    // $var8% = 'invalido';

    echo '<br>';
    var_dump($_SERVER["HTTP_HOST"]);