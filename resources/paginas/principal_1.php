<!-- INICIO SLIDE -->
<div class="container" id="carousel">
    <div class="row">
        <div class="no-padding col-sm-9">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <!--CONFIGURAÇÕES DO SLIDE ###########################################################################-->
                    <?php
                    $i = 0;
                    foreach ($getSlide as $slide) {
                        if ($i == 0) {
                            echo'<div class="item active">';
                        } else {
                            echo'<div  class="item">';
                        }
                        ?>

                        <!--<div class="item">-->
                        <a href="index.php?exe=pagina&id=<?php echo $slide['cd_not']; ?>">
                            <img src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $slide['cd_not']; ?>/media/<?php echo $slide['arquivo']; ?>" alt="...">
                            <div class="carousel-caption">
                                <div class="c-titulo"><?php echo $slide['nm_noticia']; ?></div>
                                <div class="c-chamada"><?php echo substr($slide['texto'], 0, 180); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
            <ol class="carousel-indicators">
                <?php
                $is = 0;
                foreach ($getSlide as $li) {
                    if ($is == 0) {
                        echo '<li data-target="#myCarousel" data-slide-to="' . $is . '"class="active"></li>';
                    } else {
                        echo '<li data-target="#myCarousel" data-slide-to="' . $is . '"></li>';
                    }

                    $is++;
                }
                ?>
            </ol>
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!--FIM DO SLIDE ######################################################################################-->
        <!--<div class="row">-->

            <!--INÍCIO DAS NOTÍCIAS ##############################################################################-->
            <div class="col-sm-6" id="noticias">
                <div id="titulos">NOTÍCIAS</div>
                <div class="block_titulo"></div>
                <div class="block_titulo_linha"></div>
                <?php
                foreach ($getNoticias as $Noticias) {
                    ?>
                    <a href="index.php?exe=pagina&id=<?php echo $Noticias['cd_not']; ?>">
                        <div class="row espaco nota">
                            <div class="col-sm-12 chamada"><?php echo $Noticias['nm_noticia']; ?></div>
                            <div class="col-sm-5">
                                <div style="background-image: url(https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $Noticias['cd_not']; ?>/media/<?php echo $Noticias['arquivo']; ?>);width:150px;height:100px;" class="fakeImg"></div>
                            </div>
                            <div class="col-sm-7 texto"><?php echo substr($Noticias['texto'], 0, 250) . '...'; ?></div>
                        </div>
                    </a>
                <?php } ?>

                <a href="index.php?exe=paginacao" class="btn btn-primary btn-xs">+ ler todas</a>
            </div>
            <!--FIM DAS NOTÍCIAS ##############################################################################-->


            <div class="col-sm-6">

                <div id="titulos">PUBLICAÇÕES</div>
                <div class="block_titulo"></div>
                <div class="block_titulo_linha"></div>
                <!--INÍCIO DAS PUBLICAÇÕES ##############################################################################-->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome do Arquivo</th>
                            <th class="text-center" width="10%"><i class="fa fa-download" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Portarias 20/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_c11b8156fd0bd5aa97a69ad8f2445886.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 14 a 19/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_f1cfcdfb81216374353aef8cbfbe505f.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 11 a 13/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_0a8efbafa3f8f07abfa541c6fae5d34f.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 8 a 10/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_e15169cfacaccbf64c6370ce42034a97.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 3 a 7/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_5e6fee9f971a0a4ec32091cc958d9761.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                    
                </table>
                <!--FIM DAS PUBLICAÇOES ##############################################################################-->
                <a href="https://prodap.ap.gov.br/publicacoes" class="btn btn-primary btn-xs">+ ler todas</a>
                <br><br>



                <div id="titulos">LEGISLAÇÃO</div>
                <div class="block_titulo"></div>
                <div class="block_titulo_linha"></div>
                <h4>Conheça os serviços oferecidos pelo <strong>PRODAP</strong></h4>
                <!--INÍCIO DOS SERVIÇOS ##############################################################################-->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome do Arquivo</th>
                            <th class="text-center" width="10%"><i class="fa fa-download" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Portarias 20/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_c11b8156fd0bd5aa97a69ad8f2445886.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 14 a 19/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_f1cfcdfb81216374353aef8cbfbe505f.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 11 a 13/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_0a8efbafa3f8f07abfa541c6fae5d34f.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 8 a 10/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_e15169cfacaccbf64c6370ce42034a97.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr>
                            <td>Portarias 3 a 7/2017</td>
                            <td><a href="https://editor.amapa.gov.br/arquivos_portais/publicacoes/PRODAP_5e6fee9f971a0a4ec32091cc958d9761.pdf" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <a href="https://prodap.ap.gov.br/publicacoes" class="btn btn-primary btn-xs">+ ler todas</a>
                <br><br>

                <!--FIM DOS SERVIÇOS ##############################################################################-->
            </div>
        <!--</div>-->

    </div>

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
