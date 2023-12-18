<link rel="stylesheet" type="text/css" href="{{asset('assets/Compras/css/pge.css')}}">

<div class="list-group botoes-lateral" style="margin-top: -20px">
                    <!--<div class="hidden-xs col-sm-6 col-md-12">-->
                        <a id="InLink_faq" class="list-group-item text-center" href="index.php?exe=Fale">
                            <span class="box inline-block text-left">
                                <i class="fa fa-phone text-center" aria-hidden="true"></i>
                                <span class="inline-block">Fale com<br>a Central</span>
                            </span>
                        </a>
</div>


<div class="list-group botoes-lateral">
    <a href="index.php?exe=pagLicitacoes" style="text-align: center">
    	<span class="list-group-item cor-destaque">Órgão Gestor:</span>
    </a>
    <a href="https://pge.portal.ap.gov.br/" target="_blank" class="list-group-item" >Procuradoria Geral do Estado PGE</a>

</div>

<div class="list-group botoes-lateral">
    <a href="index.php?exe=pagLicitacoes" style="text-align: center">
    	<span class="list-group-item cor-destaque">Órgãos Integrados à Central de Licitações:</span>
    </a>
    <a class="list-group-item" >Secretaria de Administração SEAD</a>
    <a class="list-group-item" >Centro de Gestão da Tecnologia da Informação PRODAP</a>

</div>
<a href="index.php?exe=pagLicitacoes" class="btn btn-primary btn-xs">+ ler todas</a>


<!--
<div id="titulos_menor">VÍDEOS</div>
<div class="block_titulo"></div>
<div class="block_titulo_linha"></div>

<ul class="list-unstyled video-list-thumbs row">
    < ?php
$videos = new Read;
$videos->ExeRead("noticia, midia", "WHERE Area_cd_area = 755 and cd_noticia = cd_not ORDER BY cd_noticia DESC LIMIT 2");

foreach ($videos->getResult() as $dadosVideos) {

?>
    <li class="col-sm-12">
        <a class="vd-1" href="http://www.youtube.com/watch?v=< ?php echo $dadosVideos['link']; ?>">
            <img src="https://i.ytimg.com/vi/< ?php echo $dadosVideos['link']; ?>/mqdefault.jpg" alt="" class="img-responsive" height="130px" />
            <h2>< ?php echo $dadosVideos['nm_noticia']; ?></h2>
            <span class="glyphicon glyphicon-play-circle"></span>
            <span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
        </a>
    </li>
< ?php } ?>
</ul>

<a href="index.php?exe=pagVideos" class="btn btn-primary btn-xs">+ ver todos</a>
-->
