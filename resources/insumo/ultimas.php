                   <h3>&nbsp;Últimas Notícias</h3>

                    <?php
                    $rs_get_news = DBLjoin('noticia', "where noticia.Area_cd_area = '$area' and cd_noticia <> '$v1' group by cd_noticia order by cd_noticia desc limit 5", 'noticia.nm_noticia, midia.arquivo, noticia.cd_noticia', 'midia', 'cd_noticia = cd_not');
                    
                    foreach ($rs_get_news as $n) {
                        if ($n['arquivo']) {
                            ?>
                            <a href="det2.php?id=<?php echo $n['cd_noticia']; ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-responsive" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $n['cd_noticia']; ?>/pequena/<?php echo $n['arquivo']; ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <p id="baixo"><?php echo $n['nm_noticia']; ?></p>
                                    </div>
                                </div>
                            </a>
                            <hr class="hr" />
                        <?php } else { ?>
                            <a href="det2.php?id=<?php echo $n['cd_noticia']; ?>">
                                <p id="baixo"><?php echo $n['nm_noticia']; ?></p>
                            </a>
                            <hr class="hr" />
                            <?php
                        }
                    }
                    ?>	