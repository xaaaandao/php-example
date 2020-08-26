<div class="titulo">
    Valor VS Referência
</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel;
    echo '<br>';

    # Atribuição por Valor
    $variavelValor = $variavel;
    echo $variavelValor;
    echo '<br>';

    $variavelValor = 'novo valor';
    echo $variavel;
    echo '<br>';
    echo $variavelValor;
    echo '<br>';

    # Atribuição por Referência
    # Pega o endereço e atribui a referência a essa variável da esquerda
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referência';

    echo "$variavel";
    echo "<br> $variavelReferencia";