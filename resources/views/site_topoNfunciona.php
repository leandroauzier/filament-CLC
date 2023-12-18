<?php
if (!isset($_POST['addNew'])) {
    $codigoCaptcha = substr(md5(time()), 0, 6);
    $_SESSION['captcha'] = $codigoCaptcha;
}
if (isset($_POST['addNew'])) {
    Newsletter::addNewsletter();
}

//$getexe = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
?>
<!-- INICIO TOPO 1 -->
<div class="container-fluid topo_um">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <span class="pull-left hidden-xs"><a href="http://www.amapa.gov.br" target="_blank"><div class="gov"><img src="img/bandeira.jpg" class="img-responsive" alt="">GOVERNO DO ESTADO DO AMAPÁ</div></a></span>
                <span class="pull-left visible-xs"><a href="http://www.amapa.gov.br" target="_blank"><div class="gov"><img src="img/bandeira.jpg" class="img-responsive" alt=""></div></a></span>

                <span class="pull-right">
                    <img class="brasao" src="img/brasao_topo.png" alt="">
                    <select onChange="window.open(this.options[this.selectedIndex].value, '_blank');" value="GO" id="lunch" class="selectpicker" data-live-search="true" title="Órgãos Governamentais">
                        <?php
                        $orgaos = R::findAll("mtxlinks", "lnk_status = 1 ORDER BY lnk_nome");
                        foreach ($orgaos as $o) {
                            ?>
                            <option value="<?php echo $o['lnk_url'] ?>" ><?php echo $o['lnk_nome'] ?></option>
                        <?php } ?>

                    </select>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- FIM TOPO 1 -->

<!-- INICIO TOPO 2 / redes sociacias-->
<nav class="navbar topo_dois">
    <div class="container">
        <div class="col-sm-12">
            <div class="navbar-text navbar-right altura">
                <div class="social"><?php echo Redes::Listar(); ?></div>
                <span class="busca">
                    <form class="navbar-form" method="post" role="search" action="busca_de_noticias">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar" name="b">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </span>
            </div>

        </div>
    </div>
</nav>
<!-- FIM TOPO 2-->

<!-- INICIO BANNER -->
<div class="container-fluid banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!--                                          ?>" class="img-responsive" alt=""></a></div>-->
                <div class="logo"><a href="./"><img src="img/13be4-logo-da-central_-branca.png" class="img-responsive" alt=""></a></div>
                <?php // if($site['prt_titulo'] == '1'){?>
                <div class="titulo">
                    <div class="nome"><h1><?php // echo $site['prt_sigla']                             ?></h1></div>
                    <div class="nome"><h3><?php // echo $site['prt_nome']                             ?></h3></div>
                </div>
                <?php // } ?>
            </div>
        </div>
    </div>
</div>
<!-- FIM BANNER -->

<!-- INICIO MENU-->
<div class="container-fluid menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                    <ul class="nav navbar-nav">
                        <li class="hidden-xs"><a href="./">PÁGINA INICIAL</a></li>

                        <li class="dropdown">
                            <a href="." class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Área do Servidor <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">

                                
                                <li><a href="index.php?exe=compras" target="_blank">Compras</a></li>
                                <li><a href="index.php?exe=almoxarifado">Almoxarifado</a></li>
                                <li><a href="index.php?exe=patrimonio" target="_blank">Patrimônio</a></li>
                                <li><a href="index.php?exe=solicitacaoCompras" target="_blank">Solicitação de Compras</a></li>

                            </ul>
                        </li>
                        <!--<li><a href="http://www.compras.ma.gov.br/sgc/faces/priv/comum/PrincipalAreaLicitante.jsp" >Área do Fornecedor</a></li>-->
                        <li><a href="index.php?exe=areaFornecedor" >Área do Fornecedor</a></li>
                        <li><a href="#" target="_blank">Editais</a></li>
                        <li><a href="#" target="_blank">Licitação</a></li>
                        <li><a href="#" target="_blank">Registro de Preço</a></li>
                        <li><a href="#" target="_blank">Registro Indiadores</a></li>
                        <li><a href="#" target="_blank">Arquivos</a></li>
                        <li><a href="#" target="_blank">Manuais</a></li>


                        <!--Área para submenu-->
                        <!--                        -->

                        <!-- <li><a href="faleconosco">CONTATO</a></li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- FIM MENU-->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if (isset($_COOKIE['newsadd'])) {
                Alertas::sucesso('Cadastro realizado com Sucesso. Você passará a receber notícias em seu e-mail');
            }
            if (isset($_COOKIE['newscoderro'])) {
                Alertas::erro('Código incorreto. Efetue a operação novamente');
            }
            if (isset($_COOKIE['newsexiste'])) {
                Alertas::erro('E-mail já existente em nossa base de dados');
            }
            ?>
        </div>
    </div>
</div>
