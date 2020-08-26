<div class="titulo">
    Tipo String
</div>

<?php

    echo 'Eu sou uma string';
    echo '<br>';

    # Apresenta 10, por causa do acento
    var_dump("Eu também");
    echo '<br>';

    # Concatenação
    echo ("Nós também" . " somos<br>");
    # , só no echo
    echo "Também aceito", " vírgulas<br>";

    echo "'Teste' " . '"Teste"'. ' \'Teste\'' . " \"Teste\"" . " \\<br>";

    # Alternativa para o echo
    print("Também existe a função print<br>");
    print "Também existe a função print<br>";

    # Funções de string
    echo strtoupper('maximmizado') . '<br>';
    echo strtolower('MINIMIZADO') . '<br>';
    echo ucfirst('só a primeira maiuscúla') . '<br>';
    echo ucwords('todas as palavras maiuscúla') . '<br>';
    echo strlen('Quantas letras?') . '<br>';
    
    # Para contar certo usar essa função
    echo mb_strlen('Eu também', "utf-8") . '<br>';
    
    # Começa no 7 e anda 6
    echo "Só uma parte mesmo<br>";
    echo substr('Sò uma parte mesmo', 7, 6);
    echo '<br>';

    # Troca todas as referências 
    echo str_replace('isso', 'aquilo', 'Trocar isso isso');

    echo '<br>';
    echo "Número é " . 123;