
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/Compras/css/css.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/libs.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/metronic-layout.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/metronic.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/estado.css')}}">
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
    <link rel="stylesheet/less" type="text/css" href="{{ asset('assets/scripts/css/estilo.less')}}">
    <link href="{{ asset('assets/scripts/css/licita.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/PRODAP/css/tipped.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/PRODAP/css/owl_002.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/PRODAP/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/PRODAP/css/responsiveslides.css')}}">
    <!-- PERSONALIZADOS -->
    <link rel="stylesheet" href="{{ asset('assets/PRODAP/css/carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/PRODAP/css/modal-youtube.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/PRODAP/css/jquery.css')}}">

    <link href="{{ asset('assets/PRODAP/css/padrao.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/PRODAP/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/PRODAP/css/bootstrap-select.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/PRODAP/css/layout.css')}}" rel="stylesheet">

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


<div class="scroll-to-top" style="display: none;">
    <a href="#" class="btn btn-primary"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
</div>

<?php include '../resources/views/site_topo.php' ?>

<!--AQUI ENTRA AS CHAMADAS DE IFRAMES E ARQUIVO DINAMICAMENTE ################################################################-->
<div class="container">
	
			<!-- Banner Tesouro Verde -->
    <div class="row">
        <div class="col-md-12">
        	<a href="http://www.plataformatesouroverde.com.br/estados/AP" target="_blank">
            	<img class="img-responsive" src="https://sead.portal.ap.gov.br/img/tesouro.png" />
            </a>
            <br />
        </div><!-- /.col -->
    </div>
	
    <!--<div id="organizaIframe">-->
    <ol class="carousel-indicators"></ol>
    <?php
    //QUERY STRING
    $getexe = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
    switch ($getexe) {
        // INICIO DA AREA DO SERVIDOR #####################################################################################################
        case 'compras':
            ?>
            <iframe id = "compras" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/priv/comum/PrincipalAreaRestrita.jsp"></iframe>
            <?php
            break;
        case 'almoxarifado':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sigaalmox"></iframe>
            <?php
            break;
        case 'patrimonio':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "1200px" height = "800px"
                    src = "http://www.siga.ap.gov.br/sigapatrimonio"></iframe>
            <?php
            break;
        case 'solicitacaoCompras':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://siga.ap.gov.br/sigatr"></iframe>
            <?php
            break;
        // FIM DA AREA DO SERVIDOR ########################################################################################################
        // INICIO FORNECEDORES ###########################################################################################################
        case 'areaLicitante':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/priv/comum/PrincipalAreaLicitante.jsp"></iframe>
            <?php
            break;
        case 'cadastroFornecedores':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "1200px" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/precadastro/UsuarioPageForm.jsp"></iframe>
            <?php
            break;
        case 'alterarCadastro':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/priv/sgc/seguranca/UsuarioFornecedorPageForm.jsp"></iframe>
            <?php
            break;
        case 'consultaFornecedores':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/tabbasicas/FornecedoresPageList.jsp"></iframe>
            <?php
            break;
        case 'imprimirCRC':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/tabbasicas/ImpressaoCertificadoCadastralPageForm.jsp"></iframe>
            <?php
            break;
        case 'alterarSenha':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/seguranca/UsuarioLicitanteRecuperarSenhaPageForm.jsp"></iframe>
            <?php
            break;
        case 'manuaisFornecedores':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://compras.ap.gov.br/manuais.rar"></iframe>
            <?php
//                                break;
//                            case 'documentosNecessarios':
            ?>
            <!--                        <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                                            src = "http://compras.ap.gov.br/docs.rar"></iframe>-->
            <?php
            break;
        case 'videoAulaSIGA':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "https://prodap.ap.gov.br/video.php#5769"></iframe>
            <?php
            break;
        case 'DOEcomDecreto':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://compras.ap.gov.br/dec1.pdf"></iframe>
            <?php
            break;
        // FIM DA AREA DO SERVIDOR ########################################################################################################
        // INICIO LICITAÇÃO #####################################################################################################
        case 'licitacoesVigentes':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/EditalPageList.jsp"></iframe>
            <?php
            break;
        case 'licitacoesEncerradas':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www2.compras.ap.gov.br/outros.php"></iframe>
            <?php
            break;
        case 'compraDireta':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/cdiretas/PropostaFornecedorCDConsultaPageList.jsp"></iframe>
            <?php
            break;
        case 'pregoesAndamento':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/AssistirPageList.jsp"></iframe>
            <?php
            break;
        case 'pregoesFuturos':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/FuturosPageList.jsp"></iframe>
            <?php
            break;
        case 'pregoesEncerrados':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/PregaoResultadosPageList.jsp"></iframe>
            <?php
            break;
        case 'pregoesSuspensos':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/pregao/SuspensosPageList.jsp"></iframe>
            <?php
            break;
        case 'avisosLicitacao':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/EditalPageList.jsp"></iframe>
            <?php
            break;
        case 'resultadosLicitacao':
            ?>
            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/ResultadosPageList.jsp"></iframe>
            <?php
            break;
        // FIM DA AREA DO SERVIDOR ########################################################################################################
        // INICIO DA AREA SEM SUBLINKS ########################################################################################################
        case 'registroPreco':
            ?>

            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/regpreco/RegistroPrecoPageList.jsp"></iframe>
            <?php
            break;
        case 'ItemCompraPageList':
            ?>

            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "yes" width = "100%" height = "800px"
                    src = "http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/ItemCompraPageList.jsp"></iframe>
            <?php
            break;

        // FIM DA AREA SEM SUBLINKS ########################################################################################################

        default:
            if (!empty($getexe)):
                $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'paginas' . DIRECTORY_SEPARATOR . strip_tags(trim($getexe) . '.php');
//                $includepatch = __DIR__ . '\\system\\' . strip_tags(trim($getexe) . '.php');
            else:
                $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'principal.php';
//                                    $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'paginas' . DIRECTORY_SEPARATOR . 'principal.php';
//                $includepatch = __DIR__ . '\\system\\home.php';
            endif;
            if (file_exists($includepatch)):
                require_once($includepatch);
            else:
                echo "<div class=\"content notfound\">";
                //WSErro("<b>Erro ao incluir tela:</b> Erro ao incluir o controller /{$getexe}.php!", WS_ERROR);
                echo "</div>";
            endif;
            break;
    }
    ?>
</div>



    <!--FIM DA CHAMADA ###########################################################################################################-->


</body>
</html>