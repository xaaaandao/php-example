<?php

/*
* isset() é uma função de verificar se existe
*/
if(isset($_POST['submit'])){
    /*
    * Responsável por receber o arquivo
    */
    if(isset($_FILES['arquivo'])){
        /*
        * Para mover o arquivo de lugar usar a função
        * No linux dar o seguinte comando para funcionar
        * sudo chmod 777 /opt/lampp/htdocs/web/form/dados_enviados/
        */
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], '/opt/lampp/htdocs/web/form/dados_enviados/data.txt')) {
            echo "Arquivo upado com sucesso";
        } else {
            echo "Arquivo não upado com sucesso";
        }

    }
}
