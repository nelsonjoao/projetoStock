<?php
/*  if(!isset($_GET['resp']) || !isset($_SESSION['route']) || !isset($_SESSION['nome_utilizador']))
helper::redirect('login');  */

$erro=false;
$mensagem=null;
$sucesso=false;
//--------------------------------------------------------------------------------
//OBS FALTOU VALIDAR CASO OS IDES PASSADOS VIA GET NÃO EXISTAM NA BD
//-------------------------------------------------------------------------------
/* if(isset($_GET['id_comentario']))
    {
        $gestor = new gestor();
        $gestor->EXE_NON_QUERY("DELETE FROM comentarios WHERE id_comentario=".$_GET['id_comentario']);
        helpers::redirect("inicio");
    }

    if(isset($_GET['id_post']))
    {
        $gestor = new gestor();
        $gestor->EXE_NON_QUERY("DELETE FROM posts WHERE id_post=".$_GET['id_post']);
        helpers::redirect("inicio");
    }
 */
/* if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(!isset($_POST['txt_comentario']))
    {
        $erro=true;
        helpers::redirect("inicio");
    }

    $id_post='';
    if(isset($_GET['id_post']))
    {
           $id_post=$_GET['id_post'];
    } 
    else 
    {
        $erro=true;
    }
    if(!$erro)
    {
        $params=[
            ':comentario' => $_POST['txt_comentario'],
            ':id_utilizador' => $_SESSION['id_utilizador'],   
            ':id_post' =>  $id_post
        ];

        $gestor = new gestor();
        $gestor->EXE_NON_QUERY("INSERT INTO comentarios (comentario,id_utilizador,id_post) VALUES (:comentario,:id_utilizador,:id_post)",$params);
        helpers::redirect("inicio");
    } 
} */

/* $gestor = new gestor();
$posts=$gestor->EXE_QUERY("SELECT p.id_post, p.titulo, p.post, p.id_utilizador, p.criado_em, u.imagem, u.nome FROM posts as p join utilizadores as u on u.id_utilizador=p.id_utilizador");
$comentarios=$gestor->EXE_QUERY("SELECT * FROM comentarios"); */
?>



  

<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overviewsss</li>
</ol>
xx
</div>