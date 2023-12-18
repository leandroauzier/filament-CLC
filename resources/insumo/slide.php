<div class="wrapper">
    <div id="ei-slider" class="ei-slider">
        <ul class="ei-slider-large" style="margin:0;">
            <?php
            foreach ($rs_get_not as $ft) {
                if ($ft['arquivo']) {
                    ?>
                    <li>
                        <?php if ($ft['texto']) { ?>

                            <a href="det2.php?id=<?php echo $ft['cd_not']; ?>">
                                <img class="img-responsive" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $ft['cd_not']; ?>/media/<?php echo $ft['arquivo']; ?>" alt="image0<?php echo $ft['cd_not']; ?>" />
                                <div class="ei-title">
                                    <h2><?php echo $ft['nm_noticia']; ?></h2>
                                    <!-- <h3><?php echo $ft['subtitulo']; ?></h3> -->
                                </div>
                            </a>

                        <?php } else { ?>

                            <img class="img-responsive" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $ft['cd_not']; ?>/media/<?php echo $ft['arquivo']; ?>" alt="image0<?php echo $ft['cd_not']; ?>" />

                        <?php } ?>

                    </li>

                <?php }
            }
            ?>
        </ul><!-- ei-slider-large -->
        <ul class="ei-slider-thumbs nav">
            <li class="ei-slider-element">Current</li>
            <?php
            reset($ft);
            foreach ($rs_get_not as $ft) {
                if ($ft['arquivo']) {
                    ?>	
                    <li><a href="#">Slide0<?php echo $ft['cd_not']; ?></a><img class="img-responsive" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $ft['cd_not']; ?>/pequena/<?php echo $ft['arquivo']; ?>" alt="thumb0<?php echo $ft['cd_not']; ?>" /></li>
                    <?php }
                }
                ?>					 
        </ul><!-- ei-slider-thumbs -->

    </div><!-- ei-slider -->
</div><!-- Wrapper --> 