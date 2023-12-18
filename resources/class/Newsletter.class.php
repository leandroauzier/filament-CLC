<?php

class Newsletter {

    public static function addNewsletter(){
        if ($_SESSION['captcha'] != $_POST['nwconfirmaCod']) {

            $_SESSION['new_nome']       = $_POST['new_nome'];
            $_SESSION['new_celular']    = $_POST['new_celular'];
            $_SESSION['new_email']      = $_POST['new_email'];

            setcookie('newscoderro', 'ok', (time() + 3));
            header("Location: " . $_SERVER['HTTP_REFERER'] . "");
        } else {
            $new_email      = filter_input(INPUT_POST, 'new_email', FILTER_SANITIZE_SPECIAL_CHARS);
            $new_celular    = filter_input(INPUT_POST, 'new_celular', FILTER_SANITIZE_SPECIAL_CHARS);
            $new_nome       = filter_input(INPUT_POST, 'new_nome', FILTER_SANITIZE_SPECIAL_CHARS);

            $consultar = R::findOne("ednewsletter", "new_email = ? AND id_portal = ?", array($new_email,$_SESSION['id_portal']));
            if (isset($consultar)) {
                $_SESSION['new_nome']       = $_POST['new_nome'];
                $_SESSION['new_celular']    = $_POST['new_celular'];
                $_SESSION['new_email']      = $_POST['new_email'];

                setcookie('newsexiste', 'ok', (time() + 3));
                header("Location: " . $_SERVER['HTTP_REFERER'] . "");
            } else {

                if ($_POST['new_email'] != "" && $_POST['new_nome'] != "") {
                    $nw_cod = md5($_POST['new_email']);
                    $cadastrar = R::dispense('ednewsletter');
                    $cadastrar->id_portal       = $_SESSION['id_portal'];
                    $cadastrar->new_nome        = $new_nome;
                    $cadastrar->new_celular     = $new_celular;
                    $cadastrar->new_email       = $new_email;
                    $cadastrar->new_email_del   = $nw_cod;
                    $inserir = R::store($cadastrar);
                }
                unset($_SESSION['new_nome']);
                unset($_SESSION['new_celular']);
                unset($_SESSION['new_email']);
                if (isset($inserir)) {
                    setcookie('newsadd', 'ok', (time() + 3));
                    header("Location: " . $_SERVER['HTTP_REFERER'] . "");
                }
            }
        }
    }
}