<!-- CONTEÚDO À PARTIR DAQUI -->
<!-- ##################################################################################################### -->

<div class="container" id="noticias">
    <div class="row">
        <div class="col-sm-9">
            <div id="titulos_menor">TODAS AS LEGISLAÇÕES</div>
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
                    $pagLegislacao = new Read;
                    $pagLegislacao->ExeRead("noticia,midia", "WHERE  Area_cd_area = 734 and cd_noticia = cd_not and tp_midia = 'Texto' ORDER BY cd_noticia DESC");
                    foreach ($pagLegislacao->getResult() as $dados) {
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
<script src="scripts/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="scripts/js/dataTables.bootstrap.js" type="text/javascript"></script>

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
