
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/Compras/css/css.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/libs.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/metronic-layout.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/metronic.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/Compras/css/estado.css') }}">
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
    <link href="{{ asset('assets/scripts/css/licita.css') }}" rel="stylesheet">

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


<?php include '../resources/views/site_topo.blade.php' ?>   


{{ $slot }}


<?php include '../resources/views/comoChegar.blade.php' ?>   

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
                    <li><a href="http://www.hal.siga.ap.gov.br/ap/#/preusuario?uri=http:~2F~2Fwww.efornecedor.siga.ap.gov.br~2Fap~2F%3Fdata%3D1520451041791&produto=efcaz&facebook=false&tipo=EXTERNO" target="_blank">Cadastro de Fornecedores</a></li>
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
                    <i class="fa fa-phone" aria-hidden="true"></i> (96) 3131-2840 - <i class="fa fa-envelope-o" aria-hidden="true"></i> clc.coordgeral@pge.ap.gov.br<br>
                    Site desenvolvido e hospedado pelo <a href="http://www.prodap.ap.gov.br/" target="_blank">PRODAP - Centro de Gestão da Tecnologia da Informação</a><br>
                    2017 - 2017 Licença Creative Commons 3.0 International
                </div>
                <div class="pull-right hidden-xs">
                    <img src="{{asset('assets/img/brasao.png')}}" alt="Amapá">
                </div>
                <div class="visible-xs text-center">
                    <img src="{{asset('assets/img/brasao.png')}}" alt="Amapá">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIM RODAPE DOIS-->


<script src="{{ asset('assets/PRODAP/jquery_003.js') }}"></script>
<script src="{{ asset('assets/PRODAP/bootstrap.js') }}"></script>
<script src="{{ asset('assets/PRODAP/jquery_002.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/PRODAP/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/PRODAP/less-1.js') }}"></script>
<script src="{{ asset('assets/PRODAP/PageSlide-script.js') }}"></script>
<script src="{{ asset('assets/PRODAP/tipped.js') }}"></script>
<script src="{{ asset('assets/PRODAP/YouTubePopUp.js') }}"></script>
<script src="{{ asset('assets/PRODAP/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/PRODAP/responsiveslides.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/PRODAP/jquery_004.js') }}" type="text/javascript"></script>


{{-- <script>
    $.get('http://www2.compras.ap.gov.br/quadro_clc.php', function (data) {
        $('#licita_ajax').html("teste");
    });
</script>

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
<script src="PRODAP/owl.js"></script>
<script src="PRODAP/owl-scripts.js"></script>
<script>
    $(document).ready(function () {
        $("#myCarousel").swiperight(function () {
            $(this).carousel('prev');
        });
        $("#myCarousel").swipeleft(function () {
            $(this).carousel('next');
        });
    });
</script>

<!-- SCRIPTS DO QUADRO_CLC.PHP -->
<script src="https://prodap.ap.gov.br/padrao/barra/suporte/prism.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    var config = {
        '.chosen-select': {}
    };
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>
<script>
    $(document).ready(function () {
        var activeSystemClass = $('.list-group-item.active');

        //something is entered in search form
        $('#system-search').keyup(function () {
            var that = this;
            // affect all table rows on in systems table
            var tableBody = $('.table-list-search tbody');
            var tableRowsClass = $('.table-list-search tbody tr');
            $('.search-sf').remove();
            tableRowsClass.each(function (i, val) {

                //Lower text for case insensitive
                var rowText = $(val).text().toLowerCase();
                var inputText = $(that).val().toLowerCase();
                if (inputText != '')
                {
                    $('.search-query-sf').remove();
                    tableBody.prepend('<tr class="search-query-sf"><td colspan="4"><strong>Procurando por: "'
                        + $(that).val()
                        + '"</strong></td></tr>');
                } else
                {
                    $('.search-query-sf').remove();
                }

                if (rowText.indexOf(inputText) == -1)
                {
                    //hide rows
                    tableRowsClass.eq(i).hide();

                } else
                {
                    $('.search-sf').remove();
                    tableRowsClass.eq(i).show();
                }
            });
            //all tr elements are hidden
            if (tableRowsClass.children(':visible').length == 0)
            {
                tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="4">Não houve dados encontrados</td></tr>');
            }
        });
    });
</script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#myModal').modal('show');
    })
</script> --}}
</body>
</html>