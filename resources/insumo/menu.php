        <?php include 'modal-contato.php';?>
        <div class="container"><!-- INICIO CONTAINER MENU -->
            <nav class="navbar navbar-gov" role="navigation">
                 <!--Brand and toggle get grouped for better mobile display
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Mudar Navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-md hidden-lg" href="#">Menu</a>
                </div>
                -->
                <!-- Collect the nav links, forms, and other content for toggling -->

                <!--<div class="collapse navbar-collapse navbar-ex1-collapse"> -->
                    <ul class="nav navbar-nav">
                       <li><a href="index.php">Início</a></li>
                        <?php
                        $rs_get_menu = DBRead('area', "where site = '$site' and menu <> 'p' and cd_area <> 482 and cd_area <> 483 and cd_area <> 484");
                        foreach ($rs_get_menu as $nm) { 
                        ?>
                        	
                        <?php if ( $mn['menu'] === "n" ) { ?>

                        	<li><a href="det.php?ar=<?php echo $nm['cd_area']; ?>"><?php echo $nm['nm_area']; ?></a></li>

                        <?php } else { ?>

	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $nm['nm_area']; ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<?php
										$sub =  $nm['cd_area'];
										$rs_get_sub = DBRead('dominio', "where Area_cd_area = '$sub'");
										foreach ($rs_get_sub as $sb) {
									?>
									<li><a href="interno.php?dm=<?php echo $sb['cd_dominio']; ?>"><?php echo $sb['nm_dominio']; ?></a></li>
									<?php } ?>
								</ul>
							</li>
						
						<?php } } ?>
                        <li><a href="galeria.php">Galerias</a></li>
                        <li><a href="video.php">Vídeos</a></li>
                        <li><a data-toggle="modal" href="#modal-contato">Fale Conosco</a></li>

						<!--
						<li><a href="licita.php">Licitações</a></li>
						
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Legislação <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a target="_blank" href="leg/Regimento_SEED.pdf">Regimento</a></li>
								<li><a target="_blank" href="leg/Reg_Jur.pdf">Regimento Jurídico</a></li>
								<li><a target="_blank" href="leg/ges_dem.pdf">Lei de Gestão Democrática</a></li>
								<li><a target="_blank" href="leg/sistema.pdf">Sistema Estadual de Educação</a></li>
								<li><a target="_blank" href="leg/plano.pdf">Plano Estadual de Educação</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Links úteis <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a target="_blank" href="http://portal.mec.gov.br/">MEC - Ministério da Educação</a></li>
								<li><a target="_blank" href="http://portal.inep.gov.br/web/enem">Enem</a>
								<li><a target="_blank" href="http://sisfiesportal.mec.gov.br/">Fies</a></li>
								<li><a target="_blank" href="http://portal.mec.gov.br/index.php?option=com_content&amp;view=article&amp;id=210&amp;Itemid=324">Prova Brasil</a></li>
								<li><a target="_blank" href="http://reuni.mec.gov.br/">REUNI</a></li>
								<li><a target="_blank" href="http://www.consed.org.br/">CONSED</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Serviços <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a target="_blank" href="http://webmail.amapa.gov.br">Webmail</a></li>
							<!-- <li><a target="_blank" href="http://www.proesc.ap.gov.br/proesc/boletim/">Boletim</a></li>
							<li><a target="_blank" href="http://www.edoc.ap.gov.br/">E-doc</a></li>
						</ul>
					</li>

					<li><a href="arquivo.php">Arquivo de notícias</a></li>
                    -->
                    </ul>
                <!--</div> /.navbar-collapse -->
            </nav>
        </div><!-- FIM CONTAINER MENU -->

        <!-- Piwik Image Tracker-->
        <img src="http://www.analitico.ap.gov.br/piwik.php?idsite=1&rec=1&action_name=PRODAP" style="border:0" alt="" />
        <!-- End Piwik -->