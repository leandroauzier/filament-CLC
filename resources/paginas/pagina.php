<?php
$v1 = (int) $_GET['id'];

$rs_get_det = DBread('noticia, area, autor', "where Autor_cd_autor = cd_autor and Area_cd_area = cd_area and cd_noticia = '$v1'", "cd_noticia, Autor_cd_autor, Midia_cd_midia, Fonte_cd_fonte, nm_noticia, dt_publicacao, texto, nm_area, nm_autor, Area_cd_area");

$rs_get_img = DBRead('midia', "where cd_not = '$v1' order by cd_midia limit 1", 'arquivo, legenda, Autor_Midia_cd_autor_midia');
?>
<!-- INICIO SLIDE -->
<div class="container" id="carousel">
    <div class="row">
        <div class="no-padding col-sm-9">


            <?php
            foreach ($rs_get_img as $i) {
                if ($i) {
                    ?>

                    <div id="imagemnot">

                        <img class="img-responsive" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $v1; ?>/<?php echo $i['arquivo']; ?>"><br />

                        <!--                        <p><?php // echo $i['legenda'];    ?></p>-->


                        <?php
                        $a = $i['Autor_Midia_cd_autor_midia'];
                        $rs_get_autor = DBRead('autor_midia', "where cd_autor_midia = 268", "nm_autor_midia");
                        foreach ($rs_get_autor as $t) {
                            if ($t) {
                                ?>
                                <div id="autor">
                                    <!--<h6>Foto: <?php // echo $t['nm_autor_midia'];     ?></h6>-->
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>

                    <?php
                }
            }
            ?> 
            <div id="notext">
                <?php foreach ($rs_get_det as $d) { ?>

                    <div class="chamada"><?php echo $d['nm_noticia'] ?></div><hr />
                    <?php
                    echo htmlspecialchars_decode($d['texto']);
                }
                ?> 
            </div>

            <hr />
        </div>
<!--        <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "no" width = "290px" height = "800px" 
                src = "./ComprasRS.html"></iframe>-->
       <?php include './ComprasRS.php'; ?> 
       
    </div>

</div>

