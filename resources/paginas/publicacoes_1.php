<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet/less" type="text/css" href="scripts/css/estilo.less" />
        <link href="scripts/css/bootstrap.min.css" rel="stylesheet">
        <link href="scripts/css/bootstrap-select.css" rel="stylesheet">
        <link href="scripts/css/layout.php" rel="stylesheet">
        <link rel="stylesheet" href="scripts/css/tipped.css">
        <link rel="stylesheet" href="scripts/css/font-awesome.min.css">
        <link rel="stylesheet" href="scripts/css/owl.carousel.min.css">
        <link rel="stylesheet" href="scripts/css/owl.theme.default.min.css">
        <link href="scripts/css/dataTables.bootstrap.css" rel="stylesheet">

    </head>
    <body>

        <!-- CONTEÚDO À PARTIR DAQUI -->
        <!-- ##################################################################################################### -->

        <div class="container" id="breadcrumb">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-home"></i> Início</a></li>
                        <li class="active">Todas as Publicações</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container" id="noticias">
            <div class="row">
                <div class="col-sm-9">
                    <div id="titulos_menor">TODAS AS PUBLICAÇÕES</div>
                    <div class="block_titulo"></div>
                    <div class="block_titulo_linha"></div>

                    <table id="tabela" class="display table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome do Arquivo</th>
                                <th class="text-center" width="10%"><i class="fa fa-download" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome do Arquivo</th>
                                <th class="text-center"><i class="fa fa-download" aria-hidden="true"></i></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $pagPublicacoes = new Read;
                            $pagPublicacoes->ExeRead("noticia,midia", "WHERE  Area_cd_area = 733 and cd_noticia = cd_not and tp_midia = 'Texto' ORDER BY cd_noticia DESC");
                            foreach ($pagPublicacoes->getResult() as $dados) {
                                ?>
                                <tr>
                                    <td><?php echo strip_tags($dados['nm_arquivo']) ?></td>
                                    <td class="text-center"><a href="https://editor.amapa.gov.br/editor/Arquivos/Texto/<?php echo strip_tags($dados['arquivo']) ?>" target="_blank" class="btn btn-default btn-xs">Visualizar <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
        <script src="scripts/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/js/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="scripts/js/jquery.mask.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                $('#new_celular').mask('(00)00000-0000', {clearIfNotMatch: true});
            });
        </script>

        <script type="text/javascript">
            //TABELA INICIO
            $.extend(true, $.fn.dataTable.defaults, {
                //"searching": false,
                "ordering": false
            });
            $(document).ready(function () {
                $('#tabela').DataTable();
            });
            $('#tabela').DataTable({
                language: {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "<i class='glyphicon glyphicon-search'></i>",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });
            //TABELA FIM
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                Tipped.create('.simple-tooltip');
            });
        </script>
        <!-- PERSONALIZADOS -->

    </body>
</html>