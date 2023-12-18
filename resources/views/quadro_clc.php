<?php
include '../resources/matrix/rb.php';
R::setup('mysql:host=192.168.251.20;dbname=licita','licita_banco','l1c1t4b4nc0');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Belem');

include '../resources/topo_painel_clc.php';
?>

<div class="container">
    <div class="row">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www2.compras.ap.gov.br/principal.php" target="_blank"><i class="fa fa-user"></i> PAINEL</a></li>
            <!--<li><a href="javascript:window.print();"><i class="fa fa-print"></i> Imprimir</a></li>-->

        </ul>
        <h3><i class="fa fa-server"></i> <b>Licitações Vigentes do Estado do Amapá</b></h3>
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
                                                            echo "<a href='http://www2.compras.ap.gov.br/edital/$arquivo_e' target='_blank' class='hidden-print'><i class='fa fa-file-pdf-o'></i> Download do Edital ";
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