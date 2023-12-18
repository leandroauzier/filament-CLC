<?php
if (!isset($_SESSION)) { session_start(); }

require_once '../resources/matrix/rb.php';
//$conectar = R::setup('mysql:host=192.168.251.74;dbname=hardcore','cotec','c039tew!');
R::addDatabase('HC', 'mysql:host=192.168.251.20;dbname=hardcore', 'hardcore', 'h@rdc0r&'); // hc = hardcore
R::addDatabase('LC', 'mysql:host=192.168.251.20;dbname=licita','licita_banco','l1c1t4b4nc0');

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Belem');

R::selectDatabase('HC');