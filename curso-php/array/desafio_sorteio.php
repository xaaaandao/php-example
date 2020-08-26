<div class="titulo">
    Desafio Sorteiro
</div>

<?php
    $nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
    $index = array_rand($nomes);

    /* Minha resposta
    <h1>
        <?php 
            $indice = array_rand($nomes);
            echo $nomes[$indice];
        ?>
    </h1>
    */

    $indice = array_rand($nomes);
    echo "<div center>
            <h1>
                $nomes[$index]
            </h1>
        </div>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>