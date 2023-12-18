            <div class="container"><!-- INICIO CONTAINER BANNER -->
                <div class="row">
                    <div class="col-sm-1 col-md-1 col-lg-1 hidden-xs">
                        <a href="index.php">
                        <center>
                    	<?php if ( $s['logo'] ) {?>
                        	<img src="https://editor.amapa.gov.br/editor/core/logo/<?php echo $s['logo']; ?>" class="logo img-responsive">
                        <?php } else { ?>
                        	<img src="https://editor.amapa.gov.br/editor/core/logo/Brazao_GRANDE.png" class="logo img-responsive">
                        <?php } ?>
                        </center>
                        </a>
                    </div>
                    <div class="visible-xs">
                        <center>
                        <?php if ( $s['logo'] ) {?>
                        	<img src="https://editor.amapa.gov.br/editor/core/logo/<?php echo $s['logo']; ?>" class="img-responsive">
                        <?php } else { ?>
            <center><a href="#"><img src="http://www.prodap.ap.gov.br/padrao/template/img/logo_pricipal.png"></a></center>
                        <?php } ?>
                        </center>
                    </div>

                    <div class="col-sm-7 col-md-8 col-lg-8 col-xs-12">
                       
                        <div class="bloco hidden-xs">
                            <h2><strong><?php echo $s['sigla']; ?></strong></h2>
                            <h4 class="subtitulo"><?php echo $s['nm_site']; ?></h4>
                        </div>
                        
                        <div class="visible-xs">
                            <h2 style="margin-top: 0px"><strong><?php echo $s['sigla']; ?></strong></h2>
                            <h4 class="subtitulo"><?php echo $s['nm_site']; ?></h4>
                        </div>
                       
                       
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 pull-right">
                        <div id="utilidade">

                            Acessibilidade: 
                            <a class="inc-font btn btn-default btn-xs" title="Aumentar fonte" href="#">A+</a>
                            <a class="res-font btn btn-default btn-xs" title="Resetar" href="#">A()</a>
                            <a class="dec-font btn btn-default btn-xs" title="Diminuir fonte" href="#">A-</a>

                            <form method="POST" action="listar.php">
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control" name="b" placeholder="Faça a sua pesquisa" required="required" >
                                    <span class="input-group-addon">
                                        <button type="submit">
                                        	<i class="fa fa-search"></i>
                                        </button>  
                                    </span>
                                </div>
                            </form>
                            
                            <?php if ($s['face']) { ?>
                                <a href="<?php $s['face']; ?>" target="_blank"><button class="btn fc btn-xs social"><i class="fa fa-facebook fa-lg"></i></button></a>
                            <?php } ?>
                            <?php if ($s['twet']) { ?>
                                <a href="<?php $s['twet']; ?>" target="_blank"><button class="btn tw btn-xs social"><i class="fa fa-twitter fa-lg"></i></button></a>
                            <?php } ?>
                            <?php if ($s['instagram']) { ?>
                                <a href="<?php $s['instagram']; ?>" target="_blank"><button class="btn is btn-xs social"><i class="fa fa-instagram fa-lg"></i></button></a>
                            <?php } ?>
                            <?php if ($s['youtube']) { ?>
                                <a href="<?php $s['youtube']; ?>" target="_blank"><button class="btn tu btn-xs social"><i class="fa fa-youtube fa-lg"></i></button></a>
                            <?php } ?>
                            <?php if ($s['linkdin']) { ?>
                                <a href="<?php $s['linkdin']; ?>" target="_blank" ><button class="btn ins btn-xs social"><i class="fa fa-linkedin fa-lg"></i></button></a>
                            <?php } ?>
                            <?php if ( ($s['face'] == '') && ($s['twet'] == '') && ($s['instagram'] == '') && ($s['youtube'] == '') && ($s['linkdin'] == '')) { echo "<br />"; } ?>
                        </div>
                    </div>
                </div>
            </div><!-- FIM CONTAINER BANNER -->	