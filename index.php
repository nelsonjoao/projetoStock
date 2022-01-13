<?php

//index
session_start();

/* if(isset($_SESSION['nome_utilizador']))
$_SESSION['route']='inicio';
else
$_SESSION['route']='login'; */

$_SESSION['route']='inicio';
include_once('helpers/helper.php');
include_once('helpers/datas.php');
include_once('helpers/gestor.php');
$config = include_once('helpers/config.php');

    include_once('routes.php');

?>