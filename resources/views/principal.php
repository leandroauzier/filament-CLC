<!-- INICIO SLIDE -->
<div class="container" id="carousel">
    <div class="row">
        <!--INICIO DO SLIDE ####################################################################################3-->
        <!-- < ?php include '../resources/paginas/slide.php'; ?> -->
        <!--FIM DO SLIDE ######################################################################################-->
        <!--<div class="row">-->

        <!--INÍCIO DAS NOTÍCIAS ##############################################################################-->

        <!--FIM DAS NOTÍCIAS ##############################################################################-->


        <div class="col-sm-12">

            <!--<div id="titulos">PUBLICAÇÕES</div>-->
            <div id="titulos">ATAS VIGENTES</div>
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
                <!-- < ?php
                foreach ($publicacoes->getResult() as $dados) {
                    ?>
                
                    <tbody>
                        <tr>
                            <td>< ?php echo strip_tags($dados['nm_arquivo'])  ?></td>
                            <td><a href="https://editor.amapa.gov.br/editor/Arquivos/Texto/< ?php echo strip_tags($dados['arquivo'])  ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>


                    < ?php
                }
                -->
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
                <!-- < ?php
                foreach ($legislacao->getResult() as $dados) {
                    ?>
                    <tbody>
                        <tr>
                            <td>< ?php echo strip_tags($dados['nm_arquivo']) ?></td>
                            <td><a href="https://editor.amapa.gov.br/editor/Arquivos/Texto/< ?php echo strip_tags($dados['arquivo'])  ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>                    
                    </tbody>
                    < ?php
                }
                ?>
            -->
            </table>
            <a href="index.php?exe=pagLegislacao" class="btn btn-primary btn-xs">+ ler todas</a>
            <br><br>

            <!--FIM DOS SERVIÇOS ##############################################################################-->
        </div>
        <!--</div>-->

    </div>

    
<!--        <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "no" width = "25%" height = "800px" 
                src = "./ComprasRS.php"></iframe>-->
    <?php include '../resources/views/ComprasRS.php'; ?>

   
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5991f0c61b1bed47ceb0496c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
