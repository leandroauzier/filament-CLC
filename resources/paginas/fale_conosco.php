<?php
//include "matrix/conectar.php";
//include "config.php";
//include "../class/Redes.class.php";
//include "../class/Alertas.class.php";
//include "../class/Newsletter.class.php";
include "../class/Contato.class.php";
//include "matrix/includes.php";

if (!isset($_POST['addContato'])) {
    $codigoCaptchaContato = substr(sha1(time()), 0, 6);
    $_SESSION['captcha_contato'] = $codigoCaptchaContato;
}
if (isset($_POST['addContato'])) {
    Contato::addContato();
}
?>
<!-- CONTEÚDO À PARTIR DAQUI -->
<!-- ##################################################################################################### -->

<div class="container" id="breadcrumb">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="./"><i class="fa fa-home"></i> Início</a></li>
                <li class="active">Fale Conosco</li>
            </ol>
        </div>
    </div>
</div>

<div class="container" id="noticias">
    <div class="row">
        <div class="col-sm-9">
            <div id="titulos_menor"><i class="fa fa-envelope" aria-hidden="true"></i> FALE CONOSCO</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>
            <p>Preencha corretamente o fomulário abaixo para que possamor dar um retorno do contato.</p>

            <?php
            if (isset($_COOKIE['contatoadd'])) {
                Alertas::sucesso('Formulário enviado com sucesso. Aguarde nosso retorno');
            }
            if (isset($_COOKIE['contato_erro'])) {
                Alertas::erro('Código de verificação incorreto. Efetue a operação novamente');
            }
            ?>

            <form method="POST" enctype="multipart/form-data" action="" role="form" class="form-group">
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>NOME COMPLETO</label>
                        <input type="text" class="form-control" id="con_nome" name="con_nome" value="<?php
                        if (isset($_SESSION['con_nome'])) {
                            echo $_SESSION['con_nome'];
                        }
                        ?>" required="required">
                    </div>
                    <div class="col-sm-9 form-group">
                        <label>E-MAIL</label>
                        <input type="email" class="form-control" id="con_email" name="con_email" value="<?php
                        if (isset($_SESSION['con_email'])) {
                            echo $_SESSION['con_email'];
                        }
                        ?>" required="required">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>TELEFONE CELULAR</label>
                        <input type="text" class="form-control text-center" id="con_telefone" name="con_telefone" value="<?php
                        if (isset($_SESSION['con_telefone'])) {
                            echo $_SESSION['con_telefone'];
                        }
                        ?>">
                    </div>
                    <div class="col-sm-12 form-group">
                        <label>ASSUNTO</label>
                        <input type="text" class="form-control" id="con_assunto" name="con_assunto" value="<?php
                        if (isset($_SESSION['con_assunto'])) {
                            echo $_SESSION['con_assunto'];
                        }
                        ?>" required="required">
                    </div>

                    <div class="form-group col-sm-12 col-md-12">
                        <label>MENSAGEM</label>
                        <textarea class="form-control" rows="6" id="con_texto" name="con_texto" required="required"><?php
                            if (isset($_SESSION['con_texto'])) {
                                echo $_SESSION['con_texto'];
                            }
                        ?></textarea>
                    </div>

                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
                            <input type="text" class="form-control text-center" disabled name="captcha_contato" id="captcha_contato" placeholder="<?php echo $_SESSION['captcha_contato']; ?>">
                        </div>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
                            <input type="text" class="form-control text-center" maxlength="6" minlength="6" name="captcha_contato_cod" placeholder="Repita">
                        </div>
                    </div>

                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-12 col-md-12 form-group">
                        <input type="hidden" name="addContato">
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> ENVIAR FORMULÁRIO</button>
                    </div>
                </div>

            </form>

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
<!-- PERSONALIZADOS -->
