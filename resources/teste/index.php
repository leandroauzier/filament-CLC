<?php

require '../_app/Config.inc.php';

$lerTeste = new Read;
$lerTeste->ExeRead("noticia", "WHERE  Area_cd_area = 732 order by cd_noticia desc limit 2");

foreach ($lerTeste->getResult() as $agora) {
    echo $agora['dt_publicacao'] . " - ";
    echo $agora['nm_noticia'];
    echo '<hr>';
}


echo $lerTeste->getRowCount();
echo '<hr>';

echo '<pre>';
var_dump($lerTeste);
echo '</pre>';

