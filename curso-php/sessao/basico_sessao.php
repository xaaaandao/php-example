<div titulo>Sessão</div>

<?php
    session_start();

    print_r($_SESSION);
    echo '<br>';

    if($_SESSION['nome']){
        $_SESSION['nome'] = 'Gabriel';
    }
