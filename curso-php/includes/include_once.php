<div class="titulo">Include Once</div>

<?php

    // Não pode redeclarar a função
    ini_set('display_errors', 1);
    // include('include_once_arquivo.php');
    include('include_once_arquivo.php');
    // require('include_once_arquivo.php');

    echo "Variável = {$variavel}"."<br>";
    $variavel = "Variavel Alterada";
    echo "Variável = {$variavel}"."<br>===========================================<br>";

    // Sempre que chama include reseta a variável
    include("include_once_arquivo.php");
    echo "Variável = {$variavel}"."<br>";
    $variavel = "Variavel Alterada";
    echo "Variável = {$variavel}"."<br>===========================================<br>";

    // Não vai resetar a variável
    include_once("include_once_arquivo.php");
    echo "Variável = {$variavel}"."<br>===========================================<br>";

    require_once("include_once_arquivo.php");
    echo "Variável = {$variavel}"."<br>===========================================<br>";
