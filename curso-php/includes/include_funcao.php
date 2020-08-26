<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';

// echo soma(1, 8) . '!<br>';
carregarArquivo(); // tem que chamar a função senão ele não calcula a soma da linha 20

// Dá erro mesmo, porque você não tem acesso a variável que está na função
echo "Variável = ".$variavel.";";
// var_dump($variavel);
echo '<br>' . soma(3, 8);