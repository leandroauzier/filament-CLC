<?php
/* Constantes de configuração */
define('QTDE_REGISTROS', 3);
define('RANGE_PAGINAS', 1);

/* Recebe o número da página via parâmetro na URL */
$pagina_atual = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

/* Calcula a linha inicial da consulta */
$linha_inicial = ($pagina_atual - 1) * QTDE_REGISTROS;

/* Cria uma conexão PDO com MySQL */
$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
// $pdo = new PDO("mysql:host=localhost; dbname=paginate_schema;", "root", "bruno", $opcoes);  
$pdo = new PDO("mysql:host=192.168.251.20; dbname=hardcore;", "hardcore", "h@rdc0r&", $opcoes);

/* Instrução de consulta para paginação com MySQL */
$sql = "SELECT arquivo, nm_arquivo FROM noticia, midia WHERE Area_cd_area = 733 and cd_noticia = cd_not and tp_midia = 'Texto' order by cd_noticia desc LIMIT {$linha_inicial}, " . QTDE_REGISTROS;
$stm = $pdo->prepare($sql);
$stm->execute();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);

/* Conta quantos registos existem na tabela */
$sqlContador = "SELECT COUNT(*) AS total_registros FROM noticia";
$stm = $pdo->prepare($sqlContador);
$stm->execute();
$valor = $stm->fetch(PDO::FETCH_OBJ);

/* Idêntifica a primeira página */
$primeira_pagina = 1;

/* Cálcula qual será a última página */
$ultima_pagina = ceil($valor->total_registros / QTDE_REGISTROS);

/* Cálcula qual será a página anterior em relação a página atual em exibição */
$pagina_anterior = ($pagina_atual > 1) ? $pagina_atual - 1 : 0;

/* Cálcula qual será a pŕoxima página em relação a página atual em exibição */
$proxima_pagina = ($pagina_atual < $ultima_pagina) ? $pagina_atual + 1 : 0;

/* Cálcula qual será a página inicial do nosso range */
$range_inicial = (($pagina_atual - RANGE_PAGINAS) >= 1) ? $pagina_atual - RANGE_PAGINAS : 1;

/* Cálcula qual será a página final do nosso range */
$range_final = (($pagina_atual + RANGE_PAGINAS) <= $ultima_pagina ) ? $pagina_atual + RANGE_PAGINAS : $ultima_pagina;

/* Verifica se vai exibir o botão "Primeiro" e "Pŕoximo" */
$exibir_botao_inicio = ($range_inicial < $pagina_atual) ? 'mostrar' : 'esconder';

/* Verifica se vai exibir o botão "Anterior" e "Último" */
$exibir_botao_final = ($range_final > $pagina_atual) ? 'mostrar' : 'esconder';
?>   
<div class="container" id="carousel">
    <div class="row">
        <div class="no-padding col-sm-9">
            <div id="titulos_menor"<div id="titulos">PUBLICAÇÕES</div>
                <div class="block_titulo"></div>
                <div class="block_titulo_linha"></div>
                <!--<h4>Conheça os serviços oferecidos pelo <strong>PRODAP</strong></h4>-->
                <!--INÍCIO DOS SERVIÇOS ##############################################################################-->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome do Arquivo</th>
                            <th class="text-center" width="10%"><i class="fa fa-download" aria-hidden="true"></i></th>
                        </tr>
                    </thead>

                    <?php if (!empty($dados)): ?>  

                        <?php foreach ($dados as $artigo): ?>  

                            <tbody>
                                <tr>
                                    <td><?php echo $artigo->nm_arquivo ?></td>
                                    <td><a href="https://editor.amapa.gov.br/editor/Arquivos/Texto/<?php echo $artigo->arquivo ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                </tr>                    
                            </tbody>

                        <?php endforeach; ?>   

                    </table>
                    <nav> <!-- inicio paginacao -->
                        <ul class="pagination">
                            <li><a href="index.php?exe=todasNoticias&page=<?php echo $primeira_pagina ?>"><span aria-hidden="true">Início</span></a></li>
                            <li class="active"><a href="index.php?exe=todasNoticias&page=<?php echo $pagina_anterior ?>" title="Página Anterior">Anterior</a></li>
                            <!--<li class="active"><a href="#"><span style="color:#FFFFFF">1</span></a></li>-->
                            <!--<li><a href="https://prodap.ap.gov.br/noticias/pagina/2">2</a></li>-->
                            <?php
                            /* Loop para montar a páginação central com os números */
                            for ($i = $range_inicial; $i <= $range_final; $i++):
                                $destaque = ($i == $pagina_atual) ? 'destaque' : '';
                                ?>   
                                <li><a href="index.php?exe=todasNoticias&page=<?php echo $i ?>"><?php echo $i ?></a></li>   
                            <?php endfor; ?>  
                            <li class="active"><a href="index.php?exe=todasNoticias&page=<?php echo $proxima_pagina ?>" title="Próxima Página">Próxima</a></li>
                            <li><a href="index.php?exe=todasNoticias&page=<?php echo $ultima_pagina ?>" aria-label="Next">Última</a></li>  
                        </ul>

                    </nav><!-- fim paginacao -->  
                <?php else: ?>   
                    <p class="bg-danger">Nenhum registro foi encontrado!</p>  
                <?php endif; ?>   

            </div>   
<!--            <iframe id = "frame1" frameborder = "0" marginheight = "0" marginwidth = "0" scrolling = "no" width = "25%" height = "800px" 
            src = "./ComprasRS.html"></iframe>-->
            <?php include './ComprasRS.php'; ?>
            <!--            <div class="col-sm-3" id="links-uteis">
                            <div id="titulos_menor">DESTAQUES</div>
                            <div class="block_titulo"></div>
                            <div class="block_titulo_linha"></div>
                            <a href="https://prodap.ap.gov.br/cidadao/" target="_blank"><img src="PRODAP/PRODAP_81fe3898d1b0f9a48751b220272fdfa0.jpg" class="img-thumbnail" alt=""></a>
                            <a href="https://prodap.ap.gov.br/docs/gestao2015.pdf" target="_blank"><img src="PRODAP/PRODAP_7b3f4a1e2f17d8322a522040bc289ddf.jpg" class="img-thumbnail" alt=""></a>
                            <a href="https://prodap.ap.gov.br/docs/petic.pdf" target="_blank"><img src="PRODAP/PRODAP_22d07e570a70f5a9a35226107bde3210.jpg" class="img-thumbnail" alt=""></a>
            
                            <div id="titulos_menor">VÍDEOS</div>
                            <div class="block_titulo"></div>
                            <div class="block_titulo_linha"></div>
            
                            INICIO DOS VÍDEOS ##############################################################################
                            <ul class="list-unstyled video-list-thumbs row">
                                <li class="col-sm-12">
                                    <a class="vd-1" href="http://www.youtube.com/watch?v=CciBlkAuXkc">
                                        <img src="PRODAP/mqdefault_002.jpg" alt="" class="img-responsive" height="130px">
                                        <h2>Prodatube 02 - Curso de Fotografia</h2>
                                        <span class="glyphicon glyphicon-play-circle"></span>
                                        <span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> 01:46</span>
                                    </a>
                                </li>
                                <li class="col-sm-12">
                                    <a class="vd-1" href="http://www.youtube.com/watch?v=Ivi-21q3o1E">
                                        <img src="PRODAP/mqdefault.jpg" alt="" class="img-responsive" height="130px">
                                        <h2>Prodatube 01 - Lançamento</h2>
                                        <span class="glyphicon glyphicon-play-circle"></span>
                                        <span class="duration"><i class="fa fa-clock-o" aria-hidden="true"></i> 01:21</span>
                                    </a>
                                </li>
                            </ul>
                            FIM DOS VÍDEOS ##############################################################################
                            <a href="https://prodap.ap.gov.br/videos" class="btn btn-primary btn-xs">+ ver todos</a>
            
                        </div>-->
        </div> 
    </div>    
