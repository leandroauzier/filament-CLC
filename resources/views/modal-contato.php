<?php
if (!isset($_SESSION)) {
    session_start(); // inicial a sessao
}

if (isset($_POST['enviar']) && $_POST["g-recaptcha-response"] != "")  {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $palavra_c = $_POST['palavra'];

  
        require '../resources/PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'webmail.amapa.gov.br';  // Specify main and backup SMTP servers
        //$mail->Host = "gmail.com"
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
               
        $mail->Password = '31312623c0t3c'; //seleciona a porta de envio 
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = '587';                                    // TCP port to connect to

        $mail->SetFrom('web@prodap.ap.gov.br', 'Web App');
        $mail->Sender = "web@prodap.ap.gov.br"; // Seu e-mail
        $mail->FromName = 'Contato via Site PRODAP';
        //$mail->addAddress('celsomello@prodap.ap.gov.br');               // Name is optional
        //$mail->addAddress('renanmiranda@hotmail.com.br', 'Renan Miranda');               // Name is optional
        $mail->addAddress('marcioatb@gmail.com', 'Márcio Brasil');               // Name is optional
        //$mail->addAddress('ana@prodap.ap.gov.br', 'GABINETE');               // Name is optional
        //$mail->addAddress('celio@prodap.ap.gov.br', 'Célio Conrado');
        //$mail->addAddress('gustavopantoja@prodap.ap.gov.br');
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->isHTML(true);                               // Set email format to HTML

        $mail->Subject = "CONTATO SITE PRODAP : " . $assunto . "";
        $mail->Body = "
        Remetente: " . $nome . " </br>
        E-mail; " . $email . " <br/>
        Contato; " . $telefone . " <br/>
        Assunto: " . $assunto . " </br></br>
        ---------------------------------------------------------
        </br>
        </br>
        Mensagem <br/>
        $mensagem

";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->Send()) {
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

<!-- Modal -->
<div class="modal fade" id="modal-contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title"><strong><i class="fa fa-weixin"></i> FALE CONOSCO</strong></div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            E-mail para Contato: cotec@prodap.ap.gov.br<br/><br/>
                        </div>
                    </div>
                </div>
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
        </div>


    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
