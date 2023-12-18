<?php
//include "matrix/conectar.php";
//include "config.php";
//include "../class/Redes.class.php";
//include "../class/Alertas.class.php";
//include "../class/Newsletter.class.php";
//include "../class/Contato.class.php";
//include "matrix/includes.php";
?>
<!-- CONTEÚDO À PARTIR DAQUI -->
<!-- ##################################################################################################### -->

<div class="container" id="carossel">
    <div class="row">
        <div class="no-padding col-sm-9">
            <div id="titulos"><i class="fa fa-envelope" aria-hidden="true"></i> FALE COM A CENTRAL</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>

            <div style="font-size: 1.2em">
                <p>Telefone geral: (96) 3131-2840</p>
                <p>E-mail: clc.coordgeral@pge.ap.gov.br</p>
            </div>




            <?php
            if (isset($_POST['enviar'])) {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $assunto = $_POST['assunto'];
                $mensagem = $_POST['mensagem'];
                //$palavra_c = $_POST['palavra'];


                require 'PHPMailer/PHPMailerAutoload.php';

                $mail = new PHPMailer();
                $mail->CharSet = 'UTF-8';
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com'; //Servidor de envio
			    $mail->SMTPAuth = true;
			    $mail->Port = '587'; //Porta de envio
			    $mail->Username = 'gov2.amapa@gmail.com'; //email para smtp autenticado
			    $mail->Password = 'r3n4nm1r4nd42016'; //seleciona a porta de envio
			    $mail->SMTPSecure = 'tls';
                $mail->Port = '587';                                    // TCP port to connect to

                $mail->SetFrom('gov2.amapa@gmail.com', 'Web App');
                $mail->Sender = "gov2.amapa@gmail.com"; // Seu e-mail
                $mail->FromName = 'Contato via Site CLC';
                $mail->addAddress('clc.coordgeral@pge.ap.gov.br', 'Fale Conosco');               // Name is optional
                //$mail->addAddress('marcio@prodap.ap.gov.br', 'Fale Conosco');               // Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');
                //$mail->isHTML(true);                               // Set email format to HTML

                $mail->Subject = "CONTATO SITE CLC : " . $assunto . "";
                $mail->Body = "
        Remetente: " . $nome . " </br>
        E-mail; " . $email . " <br/>
        Contato; " . $telefone . " <br/>
        Assunto: " . $assunto . " </br></br>
        ---------------------------------------------------------
        </br>
        </br>
        <b>Mensagem</b> <br/><br/>
        $mensagem

";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if ($mail->Send()) {
                    echo "<div class='container'>        
<div class='row'>
        <div class='col-sm-12'>
        <div class=\"alert alert-success\" id=\"success-alert\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong><i class='fa fa-check-square'></i></strong>
                Mensagem enviada com sucesso. Grato pelo contato.
        </div>
</div>
</div>
</div>";
                } else {
                    echo "<div class='container'>        
<div class='row'>
        <div class='col-sm-12'>
        <div class=\"alert alert-danger\" id=\"success-alert\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong><i class='fa fa-check-square'></i></strong>
                Erro ao enviar a mensagem.
        </div>
</div>
</div>
</div>";
                }
            }
            ?>
            <div id="titulos"><i class="fa fa-envelope" aria-hidden="true"></i> Mande a sua mensagem</div>
            <div class="block_titulo"></div>
            <div class="block_titulo_linha"></div>

            <form method="POST" action="" class="form-group">
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>NOME COMPLETO</label>
                            <input type="text" class="form-control" id="nome" name="nome" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>E-MAIL</label>
                        <input type="text" class="form-control" id="email" name="email" required="required">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>TELEFONE</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required="required">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>ASSUNTO</label>
                        <input type="text" class="form-control" id="assunto" name="assunto" required="required">
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-12">
                    <label>MENSAGEM</label>
                    <textarea class="form-control" rows="3" name="mensagem"></textarea>
                </div>

                <div class="form-group col-sm-4 col-md-4">
                    <!-- INSERIR CAPTCHA-->
                    <div class="g-recaptcha" data-sitekey="6LfgtSYTAAAAABcU-KKuZPgCYpRMUHJQLgAYRknC"></div>
                </div>


                <div class="form-group col-sm-12 col-md-12">
                    <input class="btn btn-success" type="submit" name="enviar" value="ENVIAR" id="enviar">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>

                <div style="clear: both"></div>

            </form>

        </div>
        <?php include './ComprasRS.php'; ?>
    </div>
</div>
<!-- ##################################################################################################### -->
<!-- CONTEÚDO ANTES DAQUI -->

<!--<script src="scripts/js/jquery.min.js"></script>-->
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
