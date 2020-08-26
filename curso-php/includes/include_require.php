<div class="titulo">Include vs Require</div>

<?php
// Mostra os warnings
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');

// Gera um erro fatal, por isso não printa o não achou mesmo
echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo... <br>';