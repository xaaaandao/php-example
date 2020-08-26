<div class="titulo">
    Atribuições
</div>

<?php
    $title = 'Atribuições';
    $numero = 10;
    echo $numero;
    echo '<br>';

    $numero = $numero - 1; 
    echo $numero;
    echo '<br>';
    
    $numero--; 
    echo $numero;
    echo '<br>';
    
    --$numero; 
    echo $numero;
    echo '<br>';

    $numero = $numero + 1.5; 
    echo $numero;
    echo '<br>';

    $numero += 10; 
    echo $numero;
    echo '<br>';

    $numero *= 1; 
    echo $numero;
    echo '<br>';

    $numero /= 1; 
    echo $numero;
    echo '<br>';

    $numero %= 1; 
    echo $numero;
    echo '<br>';

    $numero **= 1; 
    echo $numero;
    echo '<br>';

    # Apenas concatenação
    $numero .= 1; 
    echo $numero;
    echo '<br>';

    $texto = 'Esse é um texto';
    echo $texto;
    echo '<br>';
    
    $texto .= ' qualquer';
    echo $texto;
    echo '<br>';

    # Atribuir valor padrão
    $variavelInexistente = 'valor existente';
    echo '<br>' . $variavelInexistente;
    $valor = $variavelInexistente ?? 'valor default';
    echo '<br>' . $valor;
