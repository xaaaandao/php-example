<div class="titulo">
    Tipo Float
</div>

<?php
    # Valores literais
    echo 1.1, '<br>';

    # Continua sendo float
    var_dump(1.0);
    echo '<br>';

    # Esse dois são constantes, os demais são valores literais
    echo PHP_FLOAT_MAX, '<br>';   
    echo PHP_FLOAT_MIN, '<br>';
    echo 1.2e3, '<br>'; // Resposta -> 1200 
    echo 13E-3; // 0.013
