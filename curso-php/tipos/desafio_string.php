<div class="titulo">
    Desafio String
</div>

<?php
    /*
    Enunciado:
    Avaliando os métodos da documentação da string, 
    qual o métodos que a posicao do texto 'abc' 
    na string '!AbcaBcabc' retorne 1?
    */

    # Esse é case sensitive
    echo strpos('!AbcaBcabc', 'abc');
    echo '<br>';

    # Esse é sem o case sensitive
    echo stripos('!AbcaBcabc', 'abc', 0);
    echo '<br>';

    # Alternativa
    echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));