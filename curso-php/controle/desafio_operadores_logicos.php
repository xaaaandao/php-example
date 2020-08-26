<div class="titulo">
    Desafio Operadores Lógicos
</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois trabalhos forem executados -> TV 50 e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saúdavel
-->

<form action="#" method=post>
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
    /*
    $trabalho1 = $_POST['t1'];
    $trabalho2 = $_POST['t2'];

    $trabalho1 = (bool) $trabalho1;
    $trabalho2 = (bool) $trabalho2;
    
    # var_dump($trabalho1);
    echo $trabalho2;
    if ($trabalho1 and $trabalho2) {
        echo 'TV 50\' e Sorteve<br>';
    } else if ($trabalho1 or $trabalho2) {
        echo 'TV 32\' e Sorteve<br>';
    } else {
        echo 'Fica em casa que é mais saudável<br>';
    }
    */

    if(isset($_POST['t1']) && isset($_POST['t2'])) {
        $t1 = $_POST['t1'] === 1;
        $t2 = !!$_POST['t2'];
        $tv = '';
        $sorvete = false;
    
        if($t1 && $t2) {
            $tv = '50"';
        } else if($t1 xor $t2) {
            $tv = '32"';
        }
    
        if($t1 or $t2) {
            $sorvete = true;
        }
    
        if($tv) {
            $resultado = "Vamos comprar uma TV de $tv";
        } else {
            $resultado = "Sem TV dessa vez :(";
        }
    
        if(!$sorvete) {
            $resultado .= '<br>Estamos mais saudáveis!';
        } else {
            $resultado .= '<br>Sorvete liberado \o/!';
        }
    
        echo "<p>$resultado</p>";
    }
