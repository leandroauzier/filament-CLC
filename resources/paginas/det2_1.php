<?php
require 'part/config.php';
require 'part/connection.php';
require 'part/database.php';

error_reporting(0);
$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];

$url = "http://" . $server . $endereco;

$v1 = (int) $_GET['id'];

require 'insumo/consultas.php';

$rs_get_site = DBRead('site', "where cd_site = '$site'");

$rs_get_det = DBread('noticia, area, autor', "where Autor_cd_autor = cd_autor and Area_cd_area = cd_area and cd_noticia = '$v1'", "cd_noticia, Autor_cd_autor, Midia_cd_midia, Fonte_cd_fonte, nm_noticia, dt_publicacao, texto, nm_area, nm_autor, Area_cd_area");

$rs_get_img = DBRead('midia', "where cd_not = '$v1' order by cd_midia limit 1", 'arquivo, legenda, Autor_Midia_cd_autor_midia');

$rs_get_img2 = DBRead('midia', "where cd_not = '$v1' order by cd_midia limit 1, 100", 'arquivo, tp_midia, cd_midia, nm_arquivo, cd_not');


?>
<!DOCTYPE html>
<html lang="pt-BR">
    <?php
    foreach ($rs_get_site as $s) {
        foreach ($rs_get_det as $d) {
            ?>

			<?php require 'insumo/head.php'; ?>

            <body>
                <!-- ATRIBUIÇÃO DO TOPO PADRÃO PRINCIPAL INICIO-->
                <div id="topo" class="fixo"></div>
                <!-- ATRIBUIÇÃO DO TOPO PADRÃO PRINCIPAL FIM-->

				<?php require 'insumo/cabecalho.php'; ?>

                <!-- fim pegar atributos do site -->
                <?php
                $rod = $s['rodape'];
                $area = $d['Area_cd_area'];
            }
            ?>

            <!-- Menu -->        
        	<?php include 'insumo/menu.php'; ?>

            <!-- Centro -->

            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <div class="meio-titulos">NOTÍCIAS</div>
                        <ol class="breadcrumb visible-sm visible-md visible-lg">
                            <li>
                                <a href="index.php"><i class="icon-home"></i>&nbsp;Início</a>
                            </li>
                            <li>
                                <a href="lista.php?ar=<?php echo $d['Area_cd_area']; ?>"><?php echo $d['nm_area']; ?></a>
                            </li>
                            <?php if ($d['nm_area'] != $d['nm_noticia']) { ?>
                                <li class="active"><?php echo $d['nm_noticia']; ?></li>
                            <?php } ?>
                        </ol>
                        <h1><?php echo $d['nm_noticia']; ?></h1>

                        <?php
                        $data = date('d/m/Y - H:i', strtotime($d['dt_publicacao']));
                        $autor = $d['nm_autor'];
                        $id = $d['cd_noticia'];
                        ?>

                        <div class="hidden-xs" style="padding: 5px 0; border-top: 1px solid #E3E3E3; border-bottom: 1px solid #E3E3E3; margin: 20px 0; color:#999">
                            Por: <?php echo $autor; ?> - <?php echo $data; ?> <div style="float: right; margin-right: -20px"><a href="http://www.prodap.ap.gov.br/padrao/template/imprimir.php?id=<?php echo $id; ?>&site=<?php echo $site; ?>" target="_blank"><button class="btn btn-default btn-xs" style="float: left; margin-right: 10px"><i class="fa fa-print"></i> Imprimir</button></a> <div class="fb-share-button" style="float: left; padding-right: 20px" data-href="<?php echo $url ?>" data-layout="button_count"></div> <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <div class="g-plusone" data-size="medium"></div></div>
                        </div>
                        
                        <div class="visible-xs">
                            Por: <?php echo $autor; ?> - <?php echo $data; ?> <div style="float: right; margin-right: -20px"><div class="fb-share-button" style="float: left; padding-right: 20px" data-href="<?php echo $url ?>" data-layout="button_count"></div> <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <div class="g-plusone" data-size="medium"></div></div>
                        </div>

                        <a href="whatsapp://send" data-text="<?php echo $d['nm_noticia']; ?>" data-href="" class="wa_btn wa_btn_s" style="display:none"> Compartilhe</a>

                        <?php
                        foreach ($rs_get_img as $i) {
                            if ($i) {
                                ?>
                                <div id="imagemnot">
                                   
                                    	<img class="img-responsive" src="https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $v1; ?>/<?php echo $i['arquivo']; ?>"><br />
									
                                    	<p><?php echo $i['legenda']; ?></p>
                                    	
                                    	
                                    <?php
                                    $a = $i['Autor_Midia_cd_autor_midia'];
                                    $rs_get_autor = DBRead('autor_midia', "where cd_autor_midia = 268", "nm_autor_midia");
                                    foreach ($rs_get_autor as $t) {
                                        if ($t) {
                                            ?>
                                            <div id="autor">
                                                <h6>Foto: <?php echo $t['nm_autor_midia']; ?></h6>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <hr />
                                </div>

                                <?php
                            }
                        }
                        ?>

                        <div id="notext">
                            <?php echo htmlspecialchars_decode($d['texto']); ?>         

                        </div>
                        <hr>

                        <!-- Anexos --> 
                        
                        <?php foreach ($rs_get_img2 as $a) { 
                        	$b = $a['cd_not'];
						} 
						
						if ($b){
						
						?>
				
						<h3>&nbsp;Arquivos vinculados</h3>
						
						<?php
							reset ($a); 
							foreach ($rs_get_img2 as $a) { 
                        	?>

                                <?php if ($a['tp_midia'] <> "Imagem") { ?>

                                    <a href="http://editor.ap.gov.br/editor/Arquivos/Texto/<?php echo $a['arquivo']; ?>" target="_blank"><img src="img/doc.png" class="img-thumbnail"></a>

                                <?php } else { ?>
                                    <div id="imgPost2">
                                        <a href="#" role="button" data-toggle="modal" data-target="#Modal<?php echo $a['cd_midia']; ?>"> <img src="http://editor.ap.gov.br/editor/Arquivos/Imagens/noticia<?php echo $a['cd_not']; ?>/pequena/<?php echo $a['arquivo']; ?>" /> </a>
                                        <p><?php echo $a['nm_arquivo']; ?></p>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal<?php echo $a['cd_midia']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><?php echo $a['nm_arquivo']; ?></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-responsive" src="http://editor.ap.gov.br/editor/Arquivos/Imagens/noticia<?php echo $a['cd_not']; ?>/<?php echo $a['arquivo']; ?>" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } }  ?>
                            <?php } } ?>

                    </div>

                <div class="col-xs-11 col-sm-12 col-md-3 col-lg-3">

 				<?php require 'insumo/ultimas.php' ?>
				

			  </div>

            </div>

        </div>


        <!-- Barra inferior -->
        <div id="bannerbaixo" class="hidden-xs hidden-sm"></div>

	<?php require 'insumo/rodape.php'; ?>

        <script src="<?php echo $cam; ?>js/jquery.min.js"></script>
        <script src="<?php echo $cam; ?>js/bootstrap.min.js"></script>

        <!-- JS para ACESSIBILIDADE -->
        <script src="<?php echo $cam; ?>js/acessibilidade.js" type="text/javascript" ></script>

        <!-- PADRÃO BARRA NO TOPO FIM -->
        <script src="https://prodap.ap.gov.br/padrao/banner/js/banner.js"></script>

        
        <!-- PADRÃO SOCIAL INICIO -->
        <script type="text/javascript">
            var autor = "<?= $autor ?>";
            var data = "<?= $data ?>";
            var id = "<?= $id ?>";
            var site = "23";
        </script>
        <script src="https://prodap.ap.gov.br/padrao/social/social.js"></script>
        <!-- PADRÃO SOCIAL FIM -->

        <!-- PADRÃO BARRA NO TOPO INICIO -->
        <script src="https://prodap.ap.gov.br/padrao/barra/barra.js"></script>
        <script src="https://prodap.ap.gov.br/padrao/barra/suporte/chosen.jquery.js" type="text/javascript"></script>
        <script src="https://prodap.ap.gov.br/padrao/barra/suporte/prism.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            var config = {
                '.chosen-select': {}
            };
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
        </script>
        <!-- PADRÃO BARRA NO TOPO INICIO -->
        <!-- REDES SOCIAIS INICIO -->
        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');</script>
        <script src="https://apis.google.com/js/platform.js" async defer>
            {
                lang: 'pt-BR'
            }
        </script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=136138796561359";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
        <!-- REDES SOCIAIS FIM -->
        <script src="https://prodap.ap.gov.br/js/whatsapp-button.js"></script>
    </body>
</html>
<?php mysqli_close($db); ?>