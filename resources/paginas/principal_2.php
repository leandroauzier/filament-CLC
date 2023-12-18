<!-- INICIO SLIDE -->
<div class="container" id="carousel">
    <div class="row">
        <!--INICIO DO SLIDE ####################################################################################3-->
        <?php include './paginas/slide.php'; ?>
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
            <a href="index.php?exe=pagina&id=<?php echo strip_tags($Noticias['cd_not']); ?>">
                    <div class="row espaco nota">
                        <div class="col-sm-12 chamada"><?php echo strip_tags($Noticias['nm_noticia']); ?></div>
                        <div class="col-sm-5">
                            <div style="background-image: url(https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo strip_tags($Noticias['cd_not']); ?>/media/<?php echo strip_tags($Noticias['arquivo']); ?>);width:150px;height:100px;" class="fakeImg"></div>
                        </div>
                        <div class="col-sm-7 texto"><?php echo substr($Noticias['texto'], 0, 250) . '...'; ?></div>
                    </div>
                </a>
            <?php } ?>

            <a href="index.php?exe=paginacao" class="btn btn-primary btn-xs">+ ler todas</a>
        </div>
        <!--FIM DAS NOTÍCIAS ##############################################################################-->


        <div class="col-sm-6">

            <div id="titulos">PUBLICAÇÕES2</div>
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
                <?php
                foreach ($publicacoes->getResult() as $dados) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo strip_tags($dados['nm_arquivo'])  ?></td>
                            <td><a href="https://editor.amapa.gov.br/editor/Arquivos/Texto/<?php echo strip_tags($dados['arquivo'])  ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>


                    <?php
                }
                ?>

            </table>
            <!--FIM DAS PUBLICAÇOES ##############################################################################-->
            <a href="index.php?exe=publicacoes" class="btn btn-primary btn-xs">+ ler todas</a>
            <br><br>



            <div id="titulos">LEGISLAÇÃO</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>
            <!--<h4>Conheça os serviços oferecidos pelo <strong>PRODAP</strong></h4>-->
            <!--INÍCIO DOS SERVIÇOS ##############################################################################-->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome do Arquivo</th>
                        <th class="text-center" width="10%"><i class="fa fa-download" aria-hidden="true"></i></th>
                    </tr>
                </thead>
                <?php
                foreach ($legislacao->getResult() as $dados) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo strip_tags($dados['nm_arquivo']) ?></td>
                            <td><a href="https://editor.amapa.gov.br/editor/Arquivos/Texto/<?php echo strip_tags($dados['arquivo'])  ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>                    
                    </tbody>
                    <?php
                }
                ?>
            </table>
            <a href="index.php?exe=pagLegislacao" class="btn btn-primary btn-xs">+ ler todas</a>
            <br><br>

            <!--FIM DOS SERVIÇOS ##############################################################################-->
        </div>
        <!--</div>-->

    </div>

    
<!--        <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "no" width = "25%" height = "800px" 
                src = "./ComprasRS.php"></iframe>-->
    <?php include './ComprasRS.php'; ?>

   
</div>
