<?php

class Contato {

    public static function addContato(){
        if ($_SESSION['captcha_contato'] != $_POST['captcha_contato_cod']) {

            $_SESSION['con_nome']       = $_POST['con_nome'];
            $_SESSION['con_email']      = $_POST['con_email'];
            $_SESSION['con_telefone']   = $_POST['con_telefone'];
            $_SESSION['con_assunto']    = $_POST['con_assunto'];
            $_SESSION['con_texto']      = $_POST['con_texto'];

            setcookie('contato_erro', 'ok', (time() + 3));
            header("Location: " . $_SERVER['HTTP_REFERER'] . "");
        } else {
            $con_nome      = filter_input(INPUT_POST, 'con_nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $con_email     = filter_input(INPUT_POST, 'con_email', FILTER_SANITIZE_SPECIAL_CHARS);
            $con_telefone  = filter_input(INPUT_POST, 'con_telefone', FILTER_SANITIZE_SPECIAL_CHARS);
            $con_assunto   = filter_input(INPUT_POST, 'con_assunto', FILTER_SANITIZE_SPECIAL_CHARS);
            $con_texto     = filter_input(INPUT_POST, 'con_texto', FILTER_SANITIZE_SPECIAL_CHARS);

            $cadastrar = R::dispense('edcontatos');
            $cadastrar->id_portal       = $_SESSION['id_portal'];
            $cadastrar->con_nome        = $con_nome;
            $cadastrar->con_email       = $con_email;
            $cadastrar->con_telefone    = $con_telefone;
            $cadastrar->con_assunto     = $con_assunto;
            $cadastrar->con_texto       = $con_texto;
            $inserir = R::store($cadastrar);

            unset($_SESSION['con_nome']);
            unset($_SESSION['con_email']);
            unset($_SESSION['con_telefone']);
            unset($_SESSION['con_assunto']);
            unset($_SESSION['con_texto']);
        }

        if (isset($inserir)) {
            setcookie('contatoadd', 'ok', (time() + 3));
            header("Location: " . $_SERVER['HTTP_REFERER'] . "");
        }
    }
}

