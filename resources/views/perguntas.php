<?php
require './_app/Config.inc.php';

//error_reporting(0);
require '../resources/part/config.php';
require '../resources/part/connection.php';
require '../resources/part/database.php';
require '../resources/insumo/consultas.php';

?>
<!DOCTYPE html>
<html lang="pt-br"><head>

        <link rel="stylesheet" type="text/css" href="Compras/css.css">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/Compras/css/libs.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/Compras/metronic-layout.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/Compras/metronic.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/Compras/estado.css')}}">

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="PRODAP">
        <meta name="description" content="Centro de Gestão da Tecnologia da Informação">
        <meta name="keywords" content="Governo do Amapá">
        <meta name="reply-to" content="cotec@prodap.ap.gov.br">
        <link rel="shortcut icon" href="https://prodap.ap.gov.br/img/favicon.ico">
        <title>CLC - Central de Licitações e Contratos</title>
        <link rel="stylesheet/less" type="text/css" href="https://prodap.ap.gov.br/scripts/css/estilo.less">
        
        <link rel="stylesheet" href="{{asset('assets/PRODAP/tipped.css')}}">
        <link rel="stylesheet" href="{{asset('assets/scripts/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/PRODAP/owl_002.css')}}">
        <link rel="stylesheet" href="{{asset('assets/PRODAP/owl.css')}}">
        <link rel="stylesheet" href="{{asset('assets/PRODAP/responsiveslides.css')}}">
        <!-- PERSONALIZADOS -->
        <link rel="stylesheet" href="{{asset('assets/PRODAP/carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/PRODAP/modal-youtube.css')}}">
        <link rel="stylesheet" href="{{asset('assets/PRODAP/jquery.css')}}">

		<link href="{{asset('assets/PRODAP/padrao.css')}}" rel="stylesheet">
        <link href="{{asset('assets/PRODAP/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/PRODAP/bootstrap-select.css')}}" rel="stylesheet">
        <link href="{{asset('assets/PRODAP/layout.css')}}" rel="stylesheet">

        <style>
            #organizaIframe{
                margin-left: -30px;
                margin-bottom: -20px;
            }
            .agora{
                margin-top: -150px;
            }
            #compras{
                min-height: 800px;
                max-height: 2300px;
            }
            .chamada{
                font-size: 20px;
                color: #0b6c9a;
                font-family: fblack;
                line-height: 40px;
                margin-bottom: 10px;
            }
            .texto {
                font-size: 15px;
                color: #333;
                font-family: fregular;
                margin-bottom: 10px;
                /*            #header{
                    margin-top: -200px;
                    opacity: 0;*/
                }
                
            </style>
        </head>

        <body class="corporate home-index" style="font-family: helvetica, arial, sans-serif !important">
                    <!--<script> </script>-->
            <div class="scroll-to-top" style="display: none;">
                <a href="#" class="btn btn-primary"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
            </div>

            <?php include '../resources/views/site_topo.php'; ?>
            
	   <!-- Conteúdo do Site -->
	   
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
					<div id="titulos">PERGUNTAS FREQUENTES</div>
                    <div class="block_titulo"></div>
                    <div class="block_titulo_linha"></div>	
					<?php
						$pergunta = new Read;
						$pergunta->ExeRead("noticia", "WHERE Area_cd_area = 764 ORDER BY cd_noticia DESC"); 
						foreach ($pergunta ->getResult() as $pe) { 
					?>
							   
					   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="h<?= $pe['cd_noticia'] ?>">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#c<?= $pe['cd_noticia'] ?>" aria-expanded="true" aria-controls="c<?= $pe['cd_noticia'] ?>">
						          <span style="font-size: 1.5em"><?= $pe['nm_noticia'] ?></span>
						        </a>
						      </h4>
						    </div>
						    <div id="c<?= $pe['cd_noticia'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h<?= $pe['cd_noticia'] ?>">
						      <div class="panel-body">
						        <span style="font-size: 1.1em"><?= $pe['texto'] ?></span>
						      </div>
						    </div>
						  </div>
						</div>
			
					<?php } ?>
				</div>
			</div>
		</div>
		
		<!-- Fim Conteúdo do Site -->

		
		<!-- INICIO LINKS UTEIS-->

                <div class="container" id="links-rodape">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="titulos">LINKS ÚTEIS</div>
                            <div class="block_titulo"></div>
                            <div class="block_titulo_linha"></div>
                            <div class="owl-carousel owl-theme">
                                <?php
                                $linksUteis = new Read;
                                $linksUteis->ExeRead("mtxslide", "WHERE  sl_status = 1 ORDER BY sl_nome");
                                foreach ($linksUteis->getResult() as $sl) {
                                    ?>
                                    <a href="<?php echo $sl['sl_link'] ?>" target="_blank">
                                        <div class="thumbnail">
                                            <i class="fa <?php echo $sl['sl_icone'] ?> fa-3x" aria-hidden="true"></i>
                                            <div class="caption">
                                                <h4><?php echo $sl['sl_nome'] ?></h4>
                                                <p><?php echo $sl['sl_desc'] ?></p>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- fim do container-->

            <!-- FIM LINKS UTEIS-->
        </div><!--Fecha o container para deixar rodape com tamanho total da pagina-->
        <!-- INICIO RODAPE UM -->
        <div class="container fortaleza"></div>
        <div class="container-fluid" id="rodape_um">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="titulos"><i class="fa fa-child" aria-hidden="true"></i> CIDADÃO</div>
                        <ul class="list-unstyled">
                            <li><a href="http://www.caesa.ap.gov.br/areaServ.php" target="_blank">2ª via da Conta de Água</a></li>
                            <li><a href="http://2viasimplificada.cea.ap.gov.br:8081/" target="_blank">2ª via da Conta de Energia</a></li>
                            <li><a href="http://www.policiacivil.ap.gov.br/index.php?option=com_ckforms&amp;view=ckforms&amp;id=4&amp;Itemid=100" target="_blank">Boletim de Ocorrência Online</a></li>
                            <li><a href="http://sead.ap.gov.br/lconcursos.php" target="_blank">Concursos</a></li>
                            <li><a href="http://detranamapa.com.br/site/apps/veiculo/consultas/filtro-consulta-veiculo-htm.jsp" target="_blank">Consulta de Veículos</a></li>
                            <li><a href="http://detranamapa.com.br/site/apps/habilitacao/consulta/filtro-consulta-habilitacao-htm.jsp" target="_blank">Consultar Habilitação</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="titulos"><i class="fa fa-industry" aria-hidden="true"></i> EMPRESAS</div>
                        <ul class="list-unstyled">
                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/precadastro/UsuarioPageForm.jsp" target="_blank">Cadastro de Fornecedores</a></li>
                            <li><a href="http://www.sefaz.ap.gov.br/sate/seg/SEGf_AcessarFuncao.jsp?cdFuncao=DIA_060" target="_blank">Certidão Negativa</a></li>
                            <li><a href="http://sefaz.ap.gov.br/sate/seg/SEGf_AcessarFuncao.jsp?cdFuncao=ARR_305" target="_blank">DAR Avulso</a></li>
                            <li><a href="http://www.compras.ap.gov.br/" target="_blank">Licitações do Estado</a></li>
                            <li><a href="http://www.sefaz.ap.gov.br/index.php/nota-fiscal-do-consumidor-eletronica" target="_blank">Nota Fiscal Eletrônica</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="titulos"><i class="fa fa-users" aria-hidden="true"></i> SERVIDORES</div>
                        <ul class="list-unstyled">
                            <li><a href="http://www.agendadoservidor.ap.gov.br/" target="_blank">Agenda do Servidor</a></li>
                            <li><a href="http://www.competencias.ap.gov.br/" target="_blank">Banco de Conhecimento</a></li>
                            <li><a href="http://www.eap.ap.gov.br/" target="_blank">Catálogo de Cursos</a></li>
                            <li><a href="http://www.consig.ap.gov.br/autenticacao.php" target="_blank">Consignataria On line</a></li>
                            <li><a href="http://www.folhagea.ap.gov.br/" target="_blank">Contracheque</a></li>
                            <li><a href="https://sso.gestaodeacesso.planejamento.gov.br/cassso/login?service=https%3A%2F%2Fservidor.sigepe.planejamento.gov.br%2FSIGEPE-PortalServidor%2Fprivate%2Finicio.jsf%3Bjsessionid%3DD2U0u%2BygR3NSocx1foq6L7EL" target="_blank">Serviços do Servidor Federal</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="titulos"><i class="fa fa-thumbs-up" aria-hidden="true"></i> REDES SOCIAIS DO GEA</div>
                        <ul class="list-unstyled">
                            <li><a href="http://www.facebook.com/governo.ap" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                            <li><a href="https://www.instagram.com/governoamapa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                            <li><a href="http://www.youtube.com/user/GovernodoAmapa" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a></li>
                            <li><a href="http://www.flickr.com/photos/governoamapa" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i> Flickr</a></li>
                            <a href="http://webmail.amapa.gov.br/" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> Webmail GOV</a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- FIM RODAPE UM -->

        <!-- INICIO RODAPE DOIS-->
        <div class="container-fluid" id="rodape_dois">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-left">
                            <strong>CLC - Central de Licitações e Contratos</strong><br>
                            Av. Antonio Coelho de Carvalho nº 396, Macapá - AP -
                            <i class="fa fa-phone" aria-hidden="true"></i> (96) 3131-2801 - <i class="fa fa-envelope-o" aria-hidden="true"></i> cotec@prodap.ap.gov.br<br>
                            Site desenvolvido e hospedado pelo <a href="http://www.prodap.ap.gov.br/" target="_blank">PRODAP - Centro de Gestão da Tecnologia da Informação</a><br>
                            2017 - 2017 Licença Creative Commons 3.0 International
                        </div>
                        <div class="pull-right hidden-xs">
                            <img src="{{asset('assets/PRODAP/brasao.png')}}" alt="Amapá">
                        </div>
                        <div class="visible-xs text-center">
                            <img src="{{asset('assets/PRODAP/brasao.png')}}" alt="Amapá">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM RODAPE DOIS-->


        <script src="{{asset('assets/PRODAP/jquery_003.js')}}"></script>
        <script src="{{asset('assets/PRODAP/bootstrap.js')}}"></script>
        <script src="{{asset('assets/PRODAP/jquery_002.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/PRODAP/bootstrap-select.js')}}"></script>
        <script src="{{asset('assets/PRODAP/less-1.js')}}"></script>
        <script src="{{asset('assets/PRODAP/PageSlide-script.js')}}"></script>
        <script src="{{asset('assets/PRODAP/tipped.js')}}"></script>
        <script src="{{asset('assets/PRODAP/YouTubePopUp.js')}}"></script>
        <script src="{{asset('assets/PRODAP/jquery.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/PRODAP/responsiveslides.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/PRODAP/jquery_004.js')}}" type="text/javascript"></script>
		
        <script>
                                $(function () {
                                    $("#publicidade").responsiveSlides({
                                        speed: 800
                                    });
                                });
        </script>
        <script>
            $('#avisoModal').modal('show');
        </script>
        <script type="text/javascript">
            $(function () {
                $('#new_celular').mask('(00)00000-0000', {clearIfNotMatch: true});
            });
        </script>
        <script type="text/javascript">
            jQuery(function () {
                jQuery("a.vd-1").YouTubePopUp();
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                Tipped.create('.simple-tooltip');
            });
        </script>

        <!-- PERSONALIZADOS -->
        <script src="{{asset('assets/PRODAP/owl.js')}}"></script>
        <script src="{{asset('assets/PRODAP/owl-scripts.js')}}"></script>
        <script>
            $(document).ready(function () {
                $("#myCarousel").swiperight(function () {
                    $(this).carousel('prev');
                });
                $("#myCarousel").swipeleft(function () {
                    $(this).carousel('next');
                });
            });

            $('#noticias img').replaceWith(function (i, v) {
                return $('<div/>', {
                    style: 'background-image: url(' + this.src + ');' +
                            'width:' + this.width + 'px;' +
                            'height:' + this.height + 'px;',
                    class: 'fakeImg'
                })
            })
        </script>

    </body>
</html>
