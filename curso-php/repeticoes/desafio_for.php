<div class="titulo">
    Desafio For
</div>

<!--
#
##
###
####
#####
1) Pode usar incremento $i++
1) Não pode usar incremento $i++
-->
<?php
    $impressao = '';
    for($i = 1; $i <= 5; $i++){
        $impressao .= '#';
        echo $impressao;
        echo '<br>';
    }

    echo '<hr>';
    for($impressao2 = '#'; $impressao2 !== '#####'; $impressao2 .= '#'){
        echo $impressao2;
        echo '<br>';
    }