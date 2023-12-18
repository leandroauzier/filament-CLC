<div class="no-padding col-sm-9">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <!--CONFIGURAÇÕES DO SLIDE ###########################################################################-->
            <?php
            $getSlide = new Read;
            $getSlide->ExeRead("noticia,midia", "WHERE  Area_cd_area = 731 and cd_noticia = cd_not and tp_midia = 'Imagem' order by cd_noticia desc limit 6");
            $i = 0;
            foreach ($getSlide->getResult() as $slide) {
                if ($i == 0) {
                    echo'<div class="item active">';
                } else {
                    echo'<div  class="item">';
                }
//                echo '<pre>';
//                var_dump($slide);
//                echo '</pre>';
                ?>

                <!--<div class="item">-->
                <a href="<?php
                if ($slide['link'] != '') {
                    echo $slide['link'];
                } else {
                    echo'index.php?exe=pagina&id=' . $slide['cd_not'];
                }
                ?>">
                    <img src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $slide['cd_not']; ?>/media/<?php echo $slide['arquivo']; ?>" alt="...">
                    <div class="carousel-caption-pge">
                        <div class="c-titulo"><?php echo strip_tags($slide['nm_noticia']); ?></div>
                        <div class="c-chamada"><?php echo substr($slide['subtitulo'], 0, 180); ?>
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