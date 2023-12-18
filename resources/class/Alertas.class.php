<?php


class Alertas{

    public static function sucesso($msg){

        echo "
          <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"alert alert-success\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> Perfeito:</strong> $msg.
                    </div>
                </div>
            </div>
        ";
    }

    public static function erro($msg){
        echo "
          <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"alert alert-danger\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                        <strong><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> Erro:</strong> $msg.
                    </div>
                </div>
            </div>
        ";
    }

}