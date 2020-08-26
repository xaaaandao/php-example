<div class="titulo">
    Desafio Switch
</div>

<form action="#" method="post">
    <input type="text" name ="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">
            KM > Milha
        </option>
        <option value="milha-km">
            Milha > KM
        </option>
        <option value="metro-km">
            Metros > KM
        </option>
        <option value="km-metro">
            KM > Metros
        </option>
        <option value="c-f">
            Celsius > Fahrenheit
        </option>
        <option value="f-c">
            Fahrenheit > Celsius
        </option>
    </select>
    <!-- Se comporta como submit -->
    <button>
        Calcular
    </button>
</form>

<style>
    form > * {
        font-size = 1.8rem;
    }
</style>

<?php
$conversao = $_POST['conversao'];
$param = $_POST['param'];

switch($conversao) {
    case 'km-milha':
        $param = ((double) $param) * 0.621371;
        break;
    case 'milha-km':
        $param = ((double) $param) * 1.60934;
        break;
    case 'metro-km':
        $param = ((double) $param * 0.001);
        break;
    case 'km-metro':
        $param = ((double) $param * 1000);
        break;
    case 'cel-fah':
        $param = (((double) $param) * (9 / 5)) + 32;
        break;
    case 'fah-cel':
        $param = ((((double) $param) - 32) * (5 / 9));
        break;        
    default:
        echo "Opção inválida <br>";
}

echo "O resultado é: $param <br>";

# SOLUÇÃO PROFESSOR
/*
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;

switch($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param KM = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia KM";
        break;
    case 'metro-km':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia KM(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param KM(s) = $distancia Metro(s)";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FASH + 32;
        $mensagem = "{$param}º Celsius = {$conversao}º Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FASH;
        $mensagem = "{$param}º Fahrenheit = {$conversao}º Celsius";
        break;
    default:
        echo "Nenhum valor calculado";
}
 */