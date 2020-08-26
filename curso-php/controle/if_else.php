<div class="titulo">
    If Else
</div>

<?php

# Só imprime a primeira linha sem chaves
if (true) {
    echo "Serei impresso?<br>";
    echo "Serei impresso novamente?<br>";
}

if(true)
    echo "Verdadeiro<br>";
else
    echo "Falso<br>";

if(false) {
    echo "Passo A<br>";
} else if(true) {
    echo "Passo B<br>";
} else {
    echo "Úlitmo passo<br>";
}

echo "Fim<br>";