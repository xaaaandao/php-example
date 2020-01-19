<div class="titulo">
    Desafio Equação
</div>

<?php
    $var1 = 1;
    $var2 = 2;
    $var3 = 3;
    $var5 = 5;
    $var6 = 6;
    $var7 = 7;
    $var10 = 10;
    $quadrado = 2;
    $cubo = 3;
    $a = (($var6 * ($var3 + $var2)) ** $quadrado) / ($var3 * $var2);
    $b = (((($var1 - $var5) * ($var2 - $var7)) / $var2) ** $quadrado);
    $ab = (($a - $b) ** $cubo);
    $resultado = $ab / ($var10 ** $cubo);
    echo $a;
    echo '<br>';
    echo $b;
    echo '<br>';
    echo $resultado;
    echo '<br>';
