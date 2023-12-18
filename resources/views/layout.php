<?php
include "../resources/matrix/conectar.php";
include "../../config.php";
header('Content-type:text/css');
$layout = R::findOne("mtxlayout");
$site = R::findOne("mtxportal","id = ?",array($s))
?>

.topo_um { background: <?php echo $layout['lay_1']?>; padding: 10px 0; color: #FFF;}
.topo_dois { background: <?php echo $layout['lay_2']?>; color: #FFF; border-radius:0 }
.banner { background: url("https://gestor.amapa.gov.br/img/logos/<?php echo $site['prt_background'] ?>") no-repeat;
    background-size: cover;
    -webkit-background-size: cover; /*Css safari e chrome*/
    -moz-background-size: cover; /*Css firefox*/
    -ms-background-size: cover; /*Css IE não use mer#^@%#*/
    -o-background-size: cover; /*Css Opera*/
}