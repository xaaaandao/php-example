<div class="titulo">
    Erros personalizados
</div>

<?php
    class FaixaEtariaExcepetion extends Exception {
        public function __construct($message = "", $code = 0, Throwable $previous = null){
            echo "Erro personalizado: $message<br>";
            parent::__construct($message, $code, $previous);
        }
    }

    function calcularTempoAposentadoria($idade){
        if($idade < 18){
            throw new FaixaEtariaExcepetion("Ainda está muito longe");
        }
        if($idade > 70){
            throw new FaixaEtariaExcepetion("Já está aposentado");
        }
        return 70 - $idade;
    }

    $idadeAvaliadas = [15, 30, 60, 80];

    foreach($idadeAvaliadas as $idade){
        try {
            $tempoRestante = calcularTempoAposentadoria($idade);
            echo "Idade: $idade, $tempoRestante anos restantes<br>";
        } catch (FaixaEtariaExcepetion $e){
            echo "Não foi possível calcular $idade anos.<br>";
            echo "Motivo: {$e->getMessage()}<br>";
        }
    }

    echo "<br>Fim";