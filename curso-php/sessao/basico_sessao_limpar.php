<?php
    session_start();
    session_destroy();
    print_r($_SESSION);
    header('Location: basico_sessao.php');