<x-app-layout>
    <!--AQUI ENTRA AS CHAMADAS DE IFRAMES E ARQUIVO DINAMICAMENTE ################################################################-->
    <div class="container">
        
                <!-- Banner Tesouro Verde -->
        <div class="row">
            <div class="col-md-12">
                <a href="http://www.plataformatesouroverde.com.br/estados/AP" target="_blank">
                    <img class="img-responsive" src="https://sead.portal.ap.gov.br/img/tesouro.png" />
                </a>
                <br />
            </div><!-- /.col -->
        </div>
        
            <ol class="carousel-indicators"></ol>
            <!-- INICIO SLIDE -->
        <div class="container" id="carousel">
            <div class="row">
                <!--INICIO DO SLIDE ####################################################################################3-->
                <div class="no-padding col-sm-9">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">        
                        <div class="carousel-inner">
                            <!--CONFIGURAÇÕES DO SLIDE ###########################################################################-->
                            <div class="item active">
                                <!--<div class="item">-->
                                <a href="/">
                                    <img src="{{ asset('assets/images/PGE_FOTO.jpg') }}" alt="...">
                                    <div class="carousel-caption-pge">
                                        <div class="c-titulo">AVISO IMPORTANTE</div>
                                        <div class="c-chamada"></div>
                                    </div>
                                </a>
                            </div>
                            <div  class="item">
                                <!--<div class="item">-->
                                <a href="index.php?exe=pagina&id=31674">
                                    <img src="{{ asset('assets/images/AVISO IMPORTANTE.jpg') }}" alt="...">
                                    <div class="carousel-caption-pge">
                                        <div class="c-titulo">Central de Licitações e Contratos da PGE encerra curso sobre o SIGA, módulo compras</div>
                                        <div class="c-chamada"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <ol class="carousel-indicators"></ol>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <!-- FIM Carousel controles -->

        
        <div class="container">
            <div class="col-sm-12">
                <div id="titulos">PUBLICAÇÕES</div>
                <div class="block_titulo"></div>
                <div class="block_titulo_linha"></div>

                <!--INÍCIO DAS PUBLICAÇÕES ##############################################################################-->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome do Arquivo</th>
                            <th class="text-center" width="10%"><i class="fa fa-download" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                        @foreach ($publicacoes as $publicacao)
                            <x-publicacao-item :publicacao="$publicacao">
                            </x-publicacao-item>
                        @endforeach
                </table>
                <!--FIM DAS PUBLICAÇOES ##############################################################################-->
                <a href="index.php?exe=publicacoes" class="btn btn-primary btn-xs">+ ler todas</a>
                <br><br>
            </div>
        </div>
        <!--INÍCIO DAS LEGISLAÇÕES ##############################################################################-->
        <div class="container">
            <div class="col-sm-12">
                <div id="titulos">LEGISLAÇÕES</div>
                <div class="block_titulo"></div>
                <div class="block_titulo_linha"></div>          
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome do Arquivo</th>
                            <th class="text-center" width="10%"><i class="fa fa-download" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                        @foreach ($legislacoes as $legislacao)
                            <x-legislacao-item :legislacao="$legislacao">
                            </x-legislacao-item>
                        @endforeach
                </table>
                <a href="index.php?exe=legislacoes" class="btn btn-primary btn-xs">+ ler todas</a>
                <br><br>
            </div>
        </div>
        <!--FIM DAS LEGISLAÇÕES ##############################################################################-->
    
    </div>
    <!--FIM DA CHAMADA ###########################################################################################################-->
</x-app-layout>