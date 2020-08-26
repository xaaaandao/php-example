<div class="titulo">
    Interpolação
</div>

<?php
    $numero = 10;
    echo $numero;
    # Aspas simples -> não interpolar (a cor muda)
    echo '<br> $numero';
    echo "<br> $numero + 1";

    $texto = "A sua nota é: $numero";
    echo '<br>';

    $objeto = 'caneta';
    echo "<br>Eu tenho 5 $objetos.";
    echo "<br>Eu tenho 5 {$objeto}s.";
    echo "<br>Eu tenho 5 { $objeto}s, mas perdi 3 {$objeto }s.";
    // echo "<br> {$numero + 1}"; Não funciona
    