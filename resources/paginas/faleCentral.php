<div class="container" id="noticias">
    <div class="row">
        <div class="no-padding col-sm-9">
            <div id="titulos"><i class="fa fa-envelope" aria-hidden="true"></i> FALE COM A CENTRAL</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>

            <div style="font-size: 1.2em">
                <p>Telefone geral: (96) 3131-2840</p>
                <p>E-mail: clc.coordgeral@pge.ap.gov.br</p>
            </div>

        </div>
        <?php include './ComprasRS.php'; ?>


    </div>
</div>

<!--<script src="scripts/js/jquery.min.js"></script>-->
<script src="scripts/js/bootstrap.min.js"></script>
<script src="scripts/js/bootstrap-select.js"></script>
<script src="scripts/js/less-1.3.3.min.js"></script>
<script src="scripts/js/PageSlide.js"></script>
<script src="scripts/js/PageSlide-script.js"></script>
<script src="scripts/js/tipped.js"></script>
<script src="scripts/js/jquery.bsPhotoGallery.js"></script>
<script src="scripts/js/owl.carousel.js"></script>
<script src="scripts/js/owl-scripts.js"></script>
<script src="scripts/js/jquery.mask.js"></script>
<script>
    $(document).ready(function () {
        $('#con_telefone').mask('(00)00000-0000', {clearIfNotMatch: true});
        $('#new_celular').mask('(00)00000-0000', {clearIfNotMatch: true});
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        Tipped.create('.simple-tooltip');
    });
</script>

