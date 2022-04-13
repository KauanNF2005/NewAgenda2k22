<?php

//Todo PDO deve usar a estrutura try catch

try{

    //constantes fundamentais para se conectar com banco de dados

    DEFINE('HOST','localhost');
    DEFINE('BD','bd_agenda');
    DEFINE('USER','root');
    DEFINE('PASS','bdjmf');

    //tipo de banco de dados que utilizará: indicar o nome da constante que tem o servidor; constantes DB,USER,PASS;
    //função PDO; PDO forma de escrever no PHP; $variável = new PDO(); essa função PDO já existe no PHP, não precisamos criá-la; //função ->

    $conect = new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS);

    //setar (->) significa adicionar um método em uma variável que já contém uma informação (só metodos podem ser setados)

    $conect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //os métodos ATTR_ERRMODE e ERRMODE_EXCEPTION são inseridos para conseguirmos detectar erros.

} catch(PDOException $e){   //insere o método de erro na variável $e)
    echo "<strong>ERRO DE PDO = </strong>".$e->getMessage();   //o método getMessage() é usado para exibir o erro em forma de mensagem; neste exemplo utilizamos esse método na variável $e que contém o método que mostra o erro.
}





//tokenJMF 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


















/*
===========================================================================================
Código acima (sem comentários)
===========================================================================================
    try{

        DEFINE('HOST','localhost');
        DEFINE('BD','bd-agenda');
        DEFINE('USER','root');
        DEFINE('PASS','bdjmf');

        $conect = new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS);
        $conect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
        echo "<strong>ERRO DE PDO = </strong>".$e->getMessage();
    }

*/