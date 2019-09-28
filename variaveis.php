<?php

/*
* Hello world
*/
echo "Hello world!<br>";

/*
* Declaração de variável
*/
$mensagem = "Hello world2!<br>";

/*
* Print na variável
*/
echo $mensagem;

$A = 2;
$B = 3;

echo $A * $B . "<br>";
/*
* Exponencial = **
* . no echo concatena
*/

/*
* == Compara valores
* === Compara valor e tipo
*/
if ($A % 2 == 0){
    echo "O número é par!<br>";
} else {
    echo "O número é ímpar!<br>";
}

/*
* while
*/

$i = 0;
while($i < 10){
    echo $i . "<br>";
    $i = $i + 1;
    /*
    * ou $i++;
    */
}

echo "===============================<br>";

/*
* do -> while
*/

$i = 0;
do {
    echo $i . "<br>";
    $i = $i + 1;
    /*
    * ou $i++;
    */
} while($i < 10);

echo "===============================<br>";

/*
* for
*/

for ($i = 0; $i < 10; $i++){
    echo $i . "<br>";
}

echo "===============================<br>";

/*
* for each
*/

/*
* criar array
*/
$i = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($i as $j){
    echo $j . "<br>";
}

