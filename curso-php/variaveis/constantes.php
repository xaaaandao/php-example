<div class="titulo">
    Constantes
</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS . '<br>';
    // echo $TAXA_DE_JUROS . '<br>'; Não funciona
    // TAXA_DE_JUROS = 2.5; Não funciona

    # Outra maneira de definir constante
    const NOVA_TAXA = 2.5;
    echo NOVA_TAXA . '<br>';

    $valorVariavel = 2.8;
    
    // define('NOVISSIMA_TAXA', $valorVariavel);
    // echo NOVISSIMA_TAXA . '<br>';

    // const NOVISSIMA_TAXA = $valorVariavel; Não funciona
    const NOVISSIMA_TAXA = 2.8 + 1.2; // FUNCIONA
    echo NOVISSIMA_TAXA . '<br>'; // FUNCIONA

    echo PHP_VERSION . '<br>';
    echo PHP_INT_MAX . '<br>';
    echo __LINE__ . '<br>';
    echo __FILE__ . '<br>';
    echo __DIR__ . '<br>';