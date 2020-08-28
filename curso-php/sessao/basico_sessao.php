<div titulo>Sessão</div>

<?php
    session_start();

    print_r($_SESSION);
    echo '<br>';

    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'Gabriel';
    }

    if(!$_SESSION['email']){
        $_SESSION['email'] = 'gabriel@zmail.com';
    }

    print_r($_SESSION);
?>

    <p>
        <a href="/php-example/curso-php/sessao/basico_sessao.php">Voltar</a>
    </p>

    <p>
        <a href="/php-example/curso-php/sessao/basico_sessao_alterar.php">Alterar sessão</a>
    </p>