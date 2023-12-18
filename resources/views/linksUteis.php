<?php

/* Cria uma conexão PDO com MySQL */
$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
// $pdo = new PDO("mysql:host=localhost; dbname=paginate_schema;", "root", "bruno", $opcoes);  
$pdo = new PDO("mysql:host=192.168.251.74 dbname=hardcore;", "hardcore", "h@rdc0r&", $opcoes);

/* Instrução de consulta para paginação com MySQL */
$sql = "SELECT * WHERE sl_status = 1 ORDER BY sl_nome ";
$stm = $pdo->prepare($sql);
$stm->execute();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);



foreach ($dados as $artigo):

    echo $artigo->sl_nome;
endforeach;

