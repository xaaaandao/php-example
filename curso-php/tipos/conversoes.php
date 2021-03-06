<div class="titulo">
    Conversões
</div>

<?php
    echo is_int(PHP_INT_MAX);

    # int pra float
    echo '<br>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);

    # float para int
    echo '<p>Float para int</p>';
    var_dump((int) 6.8);
    echo '<br>';
    # Base 10
    var_dump(intval(2.8, 10));
    echo '<br>';
    var_dump(intval('11010101101', 10));
    echo '<br>';
    var_dump((int) round(2.8));
    echo '<br>';

    // operações com string
    echo '<p>Strings</p>';
    var_dump(3 + "2");
    echo '<br>';
    var_dump("3" + 2);
    echo '<br>';
    var_dump("3" . 2);
    echo '<br>';
    echo is_string("3" . 2);
    echo '<br>';
    echo is_string("3" + 2);
    echo '<br>';
    var_dump(1 + "cinco");
    echo '<br>';
    # Sempre pega o primeiro e ignora o resto, no caso o 5
    var_dump(1 + "5 cinco");
    echo '<br>';
    var_dump(1 + "cinco 5 ");
    echo '<br>';
    var_dump(1 + "2+5");
    echo '<br>';
    var_dump(1 + "3.2");
    echo '<br>';
    var_dump(1 + "-3.2e2");
    echo '<br>';
    var_dump((int) "10.5");
    echo '<br>';
    var_dump((float) "10.5");
    
    
    
    
    