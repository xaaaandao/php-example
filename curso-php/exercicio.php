<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>
            curso-php
        </h1>
        <h2>
            Visualização do Exercício
        </h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">
            Sem formatação
        </a>
        <a href="index.php" class="vermelho">
            Voltar
        </a>
    </nav>
    <main class="pricinpal">
        <div class="conteudo">
            <!-- Possível sintaxe para adicionar um arquivo php -->
            <?php
                // Como pegar o parâmetro a partir da requisição
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php")
                // OU
                // include(__DIR___ . "{$_GET['dir']}/{$_GET['file']}.php");
                // OU
                include("{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y') ?>
    </footer>
</body>
</html>
