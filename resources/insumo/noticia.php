							<h3>&nbsp; Notícias</h3>
								
		                        <?php
		                        foreach ($rs_get_all as $row) {
		                            if ($row['arquivo']) {
		                                ?>
		
		                                <div class="media">
		                                    <a href="det2.php?id=<?php echo $row['cd_noticia']; ?>">
		                                        <div class="media-left">
		                                            <img class="media-object" style="width: 70px; height: auto" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $row['cd_not']; ?>/pequena/<?php echo $row['arquivo']; ?>" alt="<?php echo $row['legenda']; ?>">
		                                        </div>
		                                        
		                                        <div class="media-body">
		                                            <h5 class="media-heading"><?php echo $row['nm_noticia']; ?></h5>
		                                        </div>
		                                    	
		                                </div>
		                                <!--
		                                <div style="font-size: 12px">
		                                	<?php echo substr($row['texto'], 0, 130); ?> ...
		                                </div>
		                                -->
		                                </a>
		                                <hr />
		                            <?php } else { ?>
		                                <a href="det2.php?id=<?php echo $row['cd_noticia']; ?>">
		                                    <h5 class="media-heading"><?php echo $row['nm_noticia']; ?></h5>
		                                    <!--
		                                    <div style="font-size: 12px">
		                                    	<?php echo substr($row['texto'], 0, 130); ?> ...
		                                    </div>
		                                    -->
		                                </a>
		                                <hr />
		                                <?php
		                            }
		                        }
		                        ?>
		                        <div style="margin-bottom: 10px; margin-right: 10px">
		                            <a href="lista.php?ar=485" class="btn btn-primary btn-sm pull-right">+ Ver todas</a>
		                        </div>