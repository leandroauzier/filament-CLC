<!-- CONTEÚDO À PARTIR DAQUI -->
<!-- ##################################################################################################### -->

<?php
include "../resources/matrix/conectar.php";
include "config.php";
include "../resources/class/Redes.class.php";
include "../resources/class/Alertas.class.php";
include "../resources/class/Newsletter.class.php";
include "../resources/matrix/includes.php";

function limit_chars($string, $caracteres = 200) {
    $string = strip_tags($string);
    if (strlen($string) > $caracteres) {
        while (substr($string, $caracteres, 1) <> ' ' && ($caracteres < strlen($string))) {
            $caracteres++;
        }
    }
    if (strlen(substr($string, 0, $caracteres)) < $caracteres) {
        return substr($string, 0, $caracteres);
    } else {
        return substr($string, 0, $caracteres) . "...";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="PRODAP">
    <meta name="description" content="<?php echo $site['prt_nome']?>">
    <meta name="keywords" content="Governo do Amapá">
    <meta name="reply-to" content="cotec@prodap.ap.gov.br">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title><?php echo $site['prt_sigla']?> - <?php echo $site['prt_nome']?></title>
    <link rel="stylesheet/less" type="text/css" href="{{ asset('assets/scripts/css/estilo.less')}}" />
    <link href="{{ asset('assets/scripts/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/scripts/css/bootstrap-select.css')}}" rel="stylesheet">
    <link href="../resources/views/layout.php" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/tipped.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/responsiveslides.css')}}">
    <!-- PERSONALIZADOS -->
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/modal-youtube.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/jquery.timeliny.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/scripts/css/tabs.css')}}">

    <script src="{{ asset('assets/scripts/js/jquery.min.js')}}"></script>

</head>

<body>
<div class="scroll-to-top">
    <a href="#" class="btn btn-primary"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
</div>
<?php include '../resources/views/site_topo.php'; ?>



<!-- INICIO SLIDE -->
<div class="container" id="carousel">
    <div id="cont" class="row">
        <div class="no-padding col-sm-9">

            <div class="container" id="links-rodape">
                <div id="rodape" class="row">
                    <div class="col-sm-12">
                        <div id="titulos">LINKS ÚTEIS</div>
                        <div class="block_titulo"></div>
                        <div class="block_titulo_linha"></div>
                        <div class="owl-carousel owl-theme">
                            
                                <a href="link" target="_blank">
                                    <div class="thumbnail">
                                        <i class="fa fa-3x" aria-hidden="true"></i>
                                        <div class="caption">
                                            <h4>nome</h4>
                                            <p>desc</p>
                                        </div>
                                    </div>
                                </a>
                            
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        
            <?php include '../resources/views/ComprasRS.php'; ?>
        
    </div>
</div>
<!-- FIM SLIDE -->


<!-- INICIO MAPA -->
<?php if($site['prt_mapa']){?>
    <div class="container" id="mapa">
        <div class="row">
            <div class="col-sm-12">
                <div id="titulos">COMO CHEGAR</div><div class="block_titulo"></div><div class="block_titulo_linha"></div>
                <iframe src="<?php echo $site['prt_mapa']?>" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php } ?>
<!-- FIM MAPA -->


<!-- ##################################################################################################### -->
<!-- CONTEÚDO ANTES DAQUI -->

<?php include '../resources/views/site_rodape.php'; ?>

<script src="https://prodap.ap.gov.br/acessibilidade.js"></script>

<script src="scripts/js/bootstrap.min.js"></script>
<script src="scripts/js/bootstrap-select.js"></script>
<script src="scripts/js/less-1.3.3.min.js"></script>
<script src="scripts/js/PageSlide-script.js"></script>
<script src="scripts/js/tipped.js"></script>
<script src="scripts/js/YouTubePopUp.jquery.js"></script>
<script src="scripts/js/jquery.mask.js" type="text/javascript"></script>
<script src="scripts/js/responsiveslides.min.js" type="text/javascript"></script>
<script src="scripts/js/jquery.mobile.custom.min.js" type="text/javascript"></script>
<script>
    $(function(){
        $('a[title]').tooltip();
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
    $(function() {
        $('#new_celular').mask('(00)00000-0000',{clearIfNotMatch: true});
    });
</script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("a.vd-1").YouTubePopUp();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        Tipped.create('.simple-tooltip');
    });
</script>

<!-- PERSONALIZADOS -->
<script src="{{ asset('assets/scripts/js/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/scripts/js/owl-scripts.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#myCarousel").swiperight(function() {$(this).carousel('prev');});
        $("#myCarousel").swipeleft(function() {$(this).carousel('next');});
    });

    $('#noticias img').replaceWith(function(i, v){
        return $('<div/>', {
            style: 'background-image: url(' + this.src + ');' +
                'width:' + this.width + 'px;' +
                'height:' + this.height + 'px;' ,
            class: 'fakeImg'
        })
    })
</script>

</body>
</html>



