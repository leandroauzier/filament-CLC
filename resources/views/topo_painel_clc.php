<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Central de Licitações - GEA</title>
        <link href="{{asset('assets/styles/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/styles/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('assets/styles/css/licita.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://prodap.ap.gov.br/padrao/barra/suporte/chosen.css">
        <link href="https://prodap.ap.gov.br/img/favicon.ico" rel="shortcut icon">
    </head>
    <body>

<!--        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-exclamation-triangle"></i> AVISO IMPORTANTE</h4>
              </div>
              <div class="modal-body">
                <p>Serviços indisponíveis no momento</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              </div>
            </div> /.modal-content 
          </div> /.modal-dialog 
        </div> /.modal -->

        <!--<div id="topo" class="fixo"></div>-->
<!--        <div class="container-fluid hidden-print" style="background-image: url('img/fundo-logo.jpg'); margin-bottom: -20px">
            <div class="container">
                <div class="row">
                    <img src="img/logo-principal.jpg">
                </div>
            </div>
        </div>-->
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <!--<nav class="navbar navbar-gov">-->
                    <!--<div class="container-fluid">-->
                        <!-- Brand and toggle get grouped for better mobile display -->
<!--                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>-->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--                            <ul class="nav navbar-nav">
                                <li><a href="quadro.php"><i class="fa fa-home"></i> LICITAÇÕES VIGENTES <span class="sr-only">(current)</span></a></li>
                                <li><a href="outros.php"><i class="fa fa-newspaper-o"></i> LICITAÇÕES ENCERRADAS</a></li>
                                
                               
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACESSO SIGA <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/priv/comum/PrincipalAreaRestrita.jsp" target="_blank">Compras</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sigaalmox" target="_blank">Almoxarifado</a></li>
                                           
                                            <li><a href="http://www.siga.ap.gov.br/sigacontrato" target="_blank">Contratos</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sigatr" target="_blank">Termo de referência</a></li>
                                           
                                            <li><a href="http://www.siga.ap.gov.br/sigapatrimonio" target="_blank">Patrimômio</a></li>
                                            <li><a href="http://siga.ap.gov.br/sigatr" target="_blank">Solicitação de Compras</a></li>
                                        </ul>
                                    </li>
                                </ul>
                              
                                
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FORNECEDORES <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/priv/comum/PrincipalAreaLicitante.jsp" target="_blank">Área do Licitante</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/precadastro/UsuarioPageForm.jsp" target="_blank">Cadastro dos Fornecedores</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/priv/sgc/seguranca/UsuarioFornecedorPageForm.jsp" target="_blank">Alterar Cadastro</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/tabbasicas/FornecedoresPageList.jsp" target="_blank">Consulta de Fornecedores</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/tabbasicas/ImpressaoCertificadoCadastralPageForm.jsp" target="_blank">Imprimir CRC</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/seguranca/UsuarioLicitanteRecuperarSenhaPageForm.jsp" target="_blank">Alterar Senha</a></li>
                                            <li><a href="manuais.rar">Manuais</a></li>
                                            <li><a href="docs.rar">Documentos Necessários</a></li>
                                            <li><a href="https://prodap.ap.gov.br/video.php#5769" target="_blank">Vídeo aula - SIGA</a></li>	
                                            <li role="separator" class="divider"></li>
                                            <li><a href="dec1.pdf" target="_blank">DOE com Decreto</a></li>						            
                                        </ul>
                                    </li>
                                </ul>
                                
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LICITAÇÕES SIGA <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/cdiretas/PropostaFornecedorCDConsultaPageList.jsp" target="_blank">Compra Direta</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/AssistirPageList.jsp" target="_blank">Pregões em Andamento</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/FuturosPageList.jsp" target="_blank">Pregões Futuros</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/PregaoResultadosPageList.jsp" target="_blank">Pregões Encerrados</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/SuspensosPageList.jsp" target="_blank">Pregões Suspensos</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/EditalPageList.jsp" target="_blank">Avisos de Licitação</a></li>
                                            <li><a href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/ResultadosPageList.jsp" target="_blank">Resultados de Licitação</a></li>						            
                                        </ul>
                                    </li>
                                </ul>
                                
                            </ul>-->
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li><a href="principal.php"> PAINEL</a></li>-->
                                <!--<li><a href="principal.php"><i class="fa fa-user"></i> PAINEL</a></li>-->
                                <!--<li><a href="javascript:window.print();"><i class="fa fa-print"></i> Imprimir</a></li>-->

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                <!--</nav>-->
            </div>
        </div>