<div class="titulo">Error handler</div>

<?php
    ini_set('display_errors', 1);
    // echo 4 / 0 . '<br>';

    // Não mostra as advertências
    error_reporting(E_ERROR);
//    echo 4 / 0 . '<br>';

    // Mostra tudo
    error_reporting(E_ALL);
//    echo 4 / 0 . '<br>';

    // Não exibe nada
    error_reporting(~E_ALL);
//    echo 4 / 0 . '<br>';

    echo '<hr>';

    error_reporting(E_ALL);
    echo 4 / 0 . '<br>';
    include 'arquivo_inexistente.php';

    function filtraMensagem($errno, $errstring){
        $text = 'include';
        return !!stripos(" $errstring", $text);
        $text = 'by zero';
        return !!stripos(" $errstring", $text);
    }

    // Somente warning;
    set_error_handler('filtraMensagem', E_WARNING);

    echo '<hr>';
    echo 4 / 0 . '<br>';
    include 'arquivo_inexistente.php';

    // resetar o error handler
    restore_error_handler();

    echo 4 / 0 . '<br>';
    include 'arquivo_inexistente.php';