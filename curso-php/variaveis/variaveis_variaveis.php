<div class="titulo">
    Variáveis Variáveis
</div>

<?php
    $a = 'valorA';
    $$a = 'valorAA';
    echo "$a $$a ";
    echo '<br>';
    
    echo "$a {$$a} ";
    echo '<br>';
    
    # é isso que acontece $a tem valorA e $valorA tem valorAA
    # $valorA = 'valorAA';

    echo "$a {$$a} ${$a}";
    echo '<br>';

    echo "$valorA";
    echo '<br>';

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita!!!!';

    echo "$epa";
    echo '<br>';

    echo "$epa {$$epa}";
    echo '<br>';

    echo "$epa {$$epa} {$$$epa}";
    echo '<br>';