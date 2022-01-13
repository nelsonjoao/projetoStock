<?php

if(!isset($_SESSION['route']))
exit();


$a='inicio';
if(isset($_GET['resp']))
$a=$_GET['resp'];


switch ($a) {
    case 'inicio': {
        include_once('layout/_html_header.php'); 
        //include_once('layout/_header.php'); 
       include_once('layout/_sidebar.php'); break;
    } 
}

?>