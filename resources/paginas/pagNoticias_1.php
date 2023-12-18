<div class="container" id="carousel">
    <div class="row">
        <div class="no-padding col-sm-9">
            <div id="titulos_menor">TODAS AS NOTÍCIAS</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>
            <?php
            $pagNoticias = new Read;
            $pagNoticias->ExeRead("noticia,midia", "WHERE  Area_cd_area = 732 and cd_noticia = cd_not ORDER BY cd_noticia DESC");
            foreach ($pagNoticias->getResult() as $dados) {
                ?>
                <tr>
                    <a href="index.php?exe=pagina&id=<?php echo $dados['cd_not'] ?>">
                        <div class="row espaco nota">
                            <div class="col-sm-3">
                                <td><div style="background-image: url(https://editor.amapa.gov.br/editor/Arquivos/Imagens/noticia<?php echo $dados['cd_not'] ?>/media/<?php echo strip_tags($dados['arquivo']) ?>);width:180px;height:120px;" ></div></td>    
                            </div>

                            <div class="col-sm-9">
                                <td class="text-center"><div class="chamada"><?php echo strip_tags($dados['nm_noticia']) ?></div>
                                    <?php echo substr($dados['texto'], 0, 400) . '...'; ?></td>
                            </div>

                        </div>

                    </a>
                    </tr>
            <?php } ?>
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

