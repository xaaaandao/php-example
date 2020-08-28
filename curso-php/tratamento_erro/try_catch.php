<div class="titulo">Try/Catch</div>

<?php
//    echo 7/0;
//    echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo "Teve um erro aqui 1 <br>";
}
//} catch(Exception $e) {
//    echo "Teve um erro aqui 2 <br>";
//}

try {
    throw new Exception("Um erro muito estranho");
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero';
// Throwable -> qualquer erro encontrado
} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e.getMessage() . '<br>';
} finally {
    // Se finalizou corretamente as demais linhas
    echo 'Sempre executando';
}

echo 'Execução continua...';

