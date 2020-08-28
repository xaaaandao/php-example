<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

// Para diferenciar a soma de use_as_arquivo
function soma($a, $b) {
    return $a . $b; // Eu sei!!!
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' . 
            __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

// Com  o uso de use, você usa a variável constante como se estivesse no próprio arquivo
use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;

echo soma(1, 2) . '<br>'; // 1,  2
echo ctx\soma(1, 2) . '<br>'; // 3

// use function Nome\Bem\Grande\soma;
// Usa o alias devido ao conflito de nome existente
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 212) . '<br>';

$a = new Classe();
$a->func();

// Se tirar \, ele usa o caminho relativo
$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

// Especifico para uma classe
use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();