
<div class="container">
    <div class="row">
        <h3><i class="fa fa-server"></i> Licitações do Estado do Amapá</h3>
        <hr/>
        <h3>Licitações Vigentes</h3>
        <hr/>
        <div class="col-sm-5">
            <div class="row">
                <form action="#" method="get">
                    <div class="input-group hidden-print">
                        <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                        <input class="form-control" id="system-search" name="q" placeholder="Procurar objeto..." required>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <br/> 
        <br/>
        <div class="col-sm-12">
            <div class="row">
                <table class="table table-list-search table-striped">
                    <thead>
                        <tr>
                            <th width="10%">ÓRGÃO</th>
                            <th width="40%">OBJETO</th>
                            <th width="40%">AVISO</th>
                            <th  width="10%" style="text-align: center">VALIDADE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data_hoje = date('Y-m-d');
                        $listar = R::getAll("SELECT aviso.id as aid, aviso.titulo_aviso, aviso.dt_validade,aviso.texto, aviso.objeto, DATE_FORMAT(dt_validade, '%d/%m/%Y') as dia, DATE_FORMAT(dt_publicacao, '%d/%m/%Y') as pub, aviso.id, aviso.cd_usuario, usuario.id, usuario.cd_origem, origem.sigla, origem.id, origem.`local` FROM aviso, usuario, origem WHERE aviso.dt_validade >= CURRENT_DATE AND aviso.cd_usuario = usuario.id  AND usuario.cd_origem = origem.id ORDER BY aviso.dt_validade ASC");
                        $i = 1;
                        foreach ($listar as $l) {
                            $objeto = mb_strtolower($l['objeto'], 'UTF-8');
                            $mobjeto = ucfirst($objeto);
                            ?>
                            <tr>
                                <td style="font-size:12px; "><?php echo $l['sigla'] ?></td>
                                <td style="font-size: 12px">
                                    <?php echo $mobjeto ?>
                                </td>
                                <td>
                                    <div id="accordion" style="margin-bottom: -20px">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <div class="panel-title" style="font-size:12px; ">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>p2"><i class="fa fa-calendar"></i> <?php echo $l['pub']; ?> - AVISO - <?php echo $l['titulo_aviso']; ?></a>
                                                </div>
                                            </div>
                                            <div id="collapse<?php echo $i; ?>p2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p style="font-size: 12px">
                                                        <?php
                                                        echo nl2br(stripslashes($l['texto']));
                                                        echo '<br/>';
                                                        $edital = R::findAll("edital", "WHERE cd_aviso = ?", array($l['aid']));
                                                        foreach ($edital as $ed) {
                                                            $arquivo_e = $ed['arquivo'];
                                                            echo '<hr/>';
                                                            echo "<a href='edital/$arquivo_e' target='_blank' class='hidden-print'><i class='fa fa-file-pdf-o'></i> Download do Edital ";
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center; font-size: 12px"><?php echo date('d/m/y', strtotime($l['dt_validade'])); ?></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">Aviso!</h2>
            </div>
            <div class="modal-body">
                <p>As licitações referentes aos órgãos:</p>
                <ul>
                    <li>1- Procuradoria Geral do Estado - PGE</li>
                    <li>2- Secretaria de Administração – SEAD</li>
                    <li>3- Centro de Gestão da Tecnologia da Informação – PRODAP</li>
                    <li>4- Polícia Militar do Estado do Amapá – PMAP</li>
                    <li>5- Gabinete do Governador de Estado – GABGOV</li>
                    <li>6- Controladoria Geral do Estado - CGE</li>
                    <li>7- Secretaria Extraordinária de Políticas para Mulheres – SEPM</li>
                    <li>8- Defensoria Pública Geral do Estado do Amapá – DEFENAP</li>
                    <li>9- Delegacia Geral da Polícia Civil – DGPC</li>
                    <li>10- Corpo de Bombeiros Militar do Amapá – CBMAP</li>
                    <li>11- Polícia técnico-Científica – POLITEC</li>
                    <li>12- Secretaria de Estado da Inclusão e Mobilização Social – SIMS</li>
                    <li>13- Secretaria de Estado da Justiça e Segurança Pública – SEJUSP</li>
                    <li>14- Secretaria de Estado da Ciência e Tecnologia – SETEC</li>
                    <li>15- Secretaria de Estado do Turismo - SETUR</li>
                    <li>16- SECRETARIA DE ESTADO DA COMUNICAÇÃO – SECOM</li>
                    <li>17- SECRETARIA DE ESTADO DO DESENVOLVIMENTO RURAL  - SDR</li>
                    <li>18- GABINETE DO VICE-GOVERNADOR – VICE-GOV</li>
                    <li>19- SECRETARIA DE ESTADO DA FAZENDA – SEFAZ</li>
                    <li>20- SECRETARIA DE ESTADO DA CULTURA - SECULT</li>
                    <li>21- SECRETARIA DE ESTADO DO MEIO AMBIENTE - SEMA</li>
                    <li>22- Secretaria de Estado desporto e Lazer - SEDEL</li>
					<li>23- Secretária de Estado do Trabalho e Empreendedorismo - SETE</li>
					<li>24- Secretaria de Estado do Desenvolvimento das Cidades- SDC</li>
					<li>25- Secretaria de Estado do Planejamento - SEPLAN</li>
                </ul>

                <p>Só Poderão ser acessadas através do botão "LICITAÇÕES SIGA" abaixo.</p>
                <p>Ao acessar a página escolher a opção "Todos" na área de pesquisa e clique no botão pesquisar.</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="http://www.siga.ap.gov.br/sgc/faces/pub/sgc/central/EditalPageList.jsp" role="button">Licitações SIGA</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>




<div id="bannerbaixo" class="hidden-xs hidden-sm"></div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://prodap.ap.gov.br/padrao/banner/js/banner.js"></script>
<!-- PADRÃO BARRA NO TOPO INICIO -->
<script src="https://prodap.ap.gov.br/padrao/barra/barra.js"></script>
<script src="https://prodap.ap.gov.br/padrao/barra/suporte/chosen.jquery.js" type="text/javascript"></script>
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

<script>
    $('#myModal2').modal('show');
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5991f0c61b1bed47ceb0496c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- PADRÃO BARRA NO TOPO FIM -->
</body>
</html>
