<?php
define('FACE',$site['prt_face']);
define('INSTA',$site['prt_insta']);
define('YOUTUBE',$site['prt_youtube']);
define('TWITTER',$site['prt_twitter']);

class Redes{

    public static function Listar(){
        if(FACE){ echo "<a href='".FACE."'><i class=\"fa fa-facebook-square fa-2x simple-tooltip\" title=\"Facebook\" aria-hidden=\"true\"></i></a>";}
        if(INSTA){ echo "<a href='".INSTA."'><i class=\"fa fa-instagram fa-2x simple-tooltip\" title=\"Instagram\" aria-hidden=\"true\"></i></a>";}
        if(YOUTUBE){ echo "<a href='".YOUTUBE."'><i class=\"fa fa-youtube-square fa-2x simple-tooltip\" title=\"Youtube\" aria-hidden=\"true\"></i></a>";}
        if(TWITTER){ echo "<a href='".TWITTER."'><i class=\"fa fa-twitter-square fa-2x simple-tooltip\" title=\"Twitter\" aria-hidden=\"true\"></i></a>";}
    }
}