<div class="titulo">
    Desafio PI
</div>

<?php
    echo pi();
    echo '<br>';
    $pi = 3.14;

    # Minha resposta
    if($pi <=> pi()) {
        echo 'Iguais<br>';
    } else {
        echo 'Diferentes<br>';
    }

    # Resposta do professor
    if($pi - pi() <= 0.01) {
        echo 'Praticamente iguais<br>';
    } else {
        echo 'Valor errado<br>';
    }