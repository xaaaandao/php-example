<div class="titulo">
    Operadores Relacionais
</div>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>

<?php
    var_dump(1 == 2);
    echo '<br>';
    # Os dois valem como diferente
    var_dump(1 != 1);
    echo '<br>';
    var_dump(1 <> 1);
    echo '<br>';

    # Compara o tipo ===
    var_dump(1 === '1');
    echo '<br>';

    echo "<p>Relacionais no If/Else</p><hr>";
    $idade = 25;

    if($idade < 18) {
        echo "Menor de idade = $idade anos!<br>";
    # Ou } elseif($idade <= 65){ Tudo junto
    } else if($idade <= 65){
        echo "Adulto = $idade anos!<br>";
    } else {
        echo "Teceira idade = $idade anos!<br>";
    }
    
    echo '<p>Spaceship</p><hr>';
    # Comparação ou ordenação de número
    # Se for da esquerda maior é 1
    var_dump(5 <=> 3);
    echo '<br>';
    # Se for igual 0
    var_dump(5 <=> 5);
    echo '<br>';
    # Se o da direita é maior -1
    var_dump(5 <=> 50);
    echo '<br>';

    echo '<p>Valores pode ser V ou F</p><hr>';
    var_dump(!!5);
    echo '<br>';
    var_dump(!!0);
    echo '<br>';