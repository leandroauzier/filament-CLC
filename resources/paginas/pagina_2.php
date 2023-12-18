<?php
//$endereco = $_SERVER ['REQUEST_URI'];

$v1 = (int) $_GET['id'];

$rs_get_det = DBread('noticia, area, autor', "where Autor_cd_autor = cd_autor and Area_cd_area = cd_area and cd_noticia = '$v1'", "cd_noticia, Autor_cd_autor, Midia_cd_midia, Fonte_cd_fonte, nm_noticia, dt_publicacao, texto, nm_area, nm_autor, Area_cd_area");

$rs_get_img = DBRead('midia', "where cd_not = '$v1' order by cd_midia limit 1", 'arquivo, legenda, Autor_Midia_cd_autor_midia');
?>
<div class="container" id="carousel">
    <div class="row">  

        <?php
        foreach ($rs_get_img as $i) {
            if ($i) {
                ?>

                <div id="imagemnot">

                    <img class="img-responsive" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $v1; ?>/<?php echo $i['arquivo']; ?>"><br />

                    <p><?php echo $i['legenda']; ?></p>


                    <?php
                    $a = $i['Autor_Midia_cd_autor_midia'];
                    $rs_get_autor = DBRead('autor_midia', "where cd_autor_midia = 268", "nm_autor_midia");
                    foreach ($rs_get_autor as $t) {
                        if ($t) {
                            ?>
                            <div id="autor">
                                <h6>Foto: <?php echo $t['nm_autor_midia']; ?></h6>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <hr />
                </div>

                <?php
            }
        }
        ?>
        <?php foreach ($rs_get_det as $d) { ?>
            <div id="notext">

                <?php
                echo htmlspecialchars_decode($d['texto']);
            }
            ?>         

        </div>
        <hr>
        <div class="col-sm-3" id="links-uteis">
            <div id="titulos_menor">DESTAQUES</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>
            <a href="https://prodap.ap.gov.br/cidadao/" target="_blank"><img src="PRODAP/PRODAP_81fe3898d1b0f9a48751b220272fdfa0.jpg" class="img-thumbnail" alt=""></a>
            <a href="https://prodap.ap.gov.br/docs/gestao2015.pdf" target="_blank"><img src="PRODAP/PRODAP_7b3f4a1e2f17d8322a522040bc289ddf.jpg" class="img-thumbnail" alt=""></a>
            <a href="https://prodap.ap.gov.br/docs/petic.pdf" target="_blank"><img src="PRODAP/PRODAP_22d07e570a70f5a9a35226107bde3210.jpg" class="img-thumbnail" alt=""></a>

            <div id="titulos_menor">VÍDEOS</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>

            <!--INICIO DOS VÍDEOS ##############################################################################-->
            <ul class="list-unstyled video-list-thumbs row">
                <li class="col-sm-12">
                    <a class="vd-1" href="http://www.youtube.com/watch?v=CciBlkAuXkc">
                        <img src="PRODAP/mqdefault_002.jpg" alt="" class="img-responsive" height="130px">
                        <h2>Prodatube 02 - Curso de Fotografia</h2>
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> 01:46</span>
                    </a>
                </li>
                <li class="col-sm-12">
                    <a class="vd-1" href="http://www.youtube.com/watch?v=Ivi-21q3o1E">
                        <img src="PRODAP/mqdefault.jpg" alt="" class="img-responsive" height="130px">
                        <h2>Prodatube 01 - Lançamento</h2>
                        <span class="glyphicon glyphicon-play-circle"></span>
                        <span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> 01:21</span>
                    </a>
                </li>
            </ul>
            <!--FIM DOS VÍDEOS ##############################################################################-->
            <a href="https://prodap.ap.gov.br/videos" class="btn btn-primary btn-xs">+ ver todos</a>

        </div>
    </div>
</div>