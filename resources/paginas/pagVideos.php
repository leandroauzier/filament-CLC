<?php

function limit_chars($string, $caracteres = 300) {
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

if (isset($_GET['p'])) {
    $p = $_GET['p'];
}
if (isset($p)) {
    $p = $p;
} else {
    $p = 1;
}
$qnt = 5;
$inicio = ($p * $qnt) - $qnt;

$noticias = DBRead('noticia, midia', "WHERE Area_cd_area = 755 and cd_noticia = cd_not order by cd_noticia desc LIMIT $inicio, $qnt", 'cd_not, arquivo, link, nm_noticia, texto');

$pags = ceil(count($noticias) / $qnt);
$max_links = 10;
?>

<!-- CONTEÚDO À PARTIR DAQUI -->
<!-- ##################################################################################################### -->

<div class="container" id="noticias">
    <div class="row">
        <div class="col-sm-9">
            <div id="titulos_menor">TODOS OS VIDEOS</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>

            <div class="row" id="busca">
                <div class="col-sm-12">
                    <i class="fa fa-database" aria-hidden="true"></i> Total de registros: <span class="badge"><?php echo count($noticias); ?></span>
                    <!--                    <form class="navbar-form navbar-right" method="post" role="search" action="busca_de_noticias">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Buscar Notícia" name="b"  required="required">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                </div>
                                            </div>
                                        </form>-->
                </div>
            </div>

            <?php
            foreach ($noticias as $nt) {
//                echo '<pre>';
//                var_dump($nt);
//                echo '</pre>';
                ?>
                <a class="vd-1" href="http://www.youtube.com/watch?v=<?php echo $nt['link'] ?>">
                     <div class="row espaco nota">
                        <div class="col-sm-3">
                            <img src="https://i.ytimg.com/vi/<?php echo $nt['link']?>/mqdefault.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="col-sm-9">
                            <div class="chamadaVideos"><?php echo $nt['nm_noticia']?> - <i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class="texto"><?php echo limit_chars($nt['texto'])?></div>
                        </div>
                    </div>
                </a>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="clearfix"></div>
                            <div class="divisor"></div>
                        </div>
                    </div>
                </a>
            <?php } ?>

            <nav> <!-- inicio paginacao -->
                <ul class="pagination">
                    <?php
                    echo "<li><a href='index.php?exe=pagVideos&1'><span aria-hidden='true'>Início</span></a></li>";
                    for ($i = $p - $max_links; $i <= $p - 1; $i++) {
                        if ($i <= 0) {
                            
                        } else {
                            echo "<li><a href='index.php?exe=pagVideos&$i'>$i</a></li>";
                        }
                    }
                    echo "<li class='active'><a href='#'><span style='color:#FFFFFF'>$p</style></a></li>";
                    for ($i = $p + 1; $i <= $p + $max_links; $i++) {
                        if ($i > $pags) {
                            
                        } else {
                            echo "<li><a href='index.php?exe=pagVideos&$i'>$i</a></li>";
                        }
                    }
                    echo "<li><a href='index.php?exe=pagVideos&$pags' aria-label='Next'>Última</a></li>";
                    ?>
                </ul>
            </nav><!-- fim paginacao -->
        </div>

        <?php include './ComprasRS.php'; ?>

    </div>
</div>
<!-- ##################################################################################################### -->
<!-- CONTEÚDO ANTES DAQUI -->

<script src="scripts/js/jquery.min.js"></script>
<script src="scripts/js/bootstrap.min.js"></script>
<script src="scripts/js/bootstrap-select.js"></script>
<script src="scripts/js/less-1.3.3.min.js"></script>
<script src="scripts/js/PageSlide.js"></script>
<script src="scripts/js/PageSlide-script.js"></script>
<script src="scripts/js/tipped.js"></script>
<script src="scripts/js/jquery.bsPhotoGallery.js"></script>
<script src="scripts/js/owl.carousel.js"></script>
<script src="scripts/js/owl-scripts.js"></script>
<script src="scripts/js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#new_celular').mask('(00)00000-0000', {clearIfNotMatch: true});
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        Tipped.create('.simple-tooltip');
    });
</script>
<!--<script>
    $('#noticias img').replaceWith(function (i, v) {
        return $('<div/>', {
            style: 'background-image: url(' + this.src + ');' +
                    'width:' + this.width + 'px;' +
                    'height:' + this.height + 'px;',
            class: 'fakeImg'
        })
    })
</script>-->

<?php

