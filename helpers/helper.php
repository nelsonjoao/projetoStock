<?php
//namespace assets;
class helper
{

   
    public static function IniciarSessao($dados)
    {       
        $_SESSION['id_estudante']=$dados[0]['Id_estudante'];
        $_SESSION['nome_estudante']=$dados[0]['Nome'];
        $_SESSION['imagem_estudante']=$dados[0]['Imagem'];
       //$_SESSION['permissoes']=$dados[0]['permissoes'];
       
    }

    public static function DestroiSessao()
    {
        unset($_SESSION['id_estudante']);
        unset($_SESSION['nome_estudante']);
        unset($_SESSION['imagem_estudante']);
        //unset($_SESSION['permissoes']);
    }

    public static function IniciarSessaoUsuario($dados)
    {       
        $_SESSION['id_usuario']=$dados[0]['Id_usuario'];
        $_SESSION['nome_usuario']=$dados[0]['Nome'];
        $_SESSION['imagem_usuario']=$dados[0]['Imagem'];
        $_SESSION['perfil']=$dados[0]['Perfil'];
       
    }

    public static function DestroiSessaoUsuario()
    {
        unset($_SESSION['id_usuario']);
        unset($_SESSION['nome_usuario']);
        unset($_SESSION['imagem_usuario']);
        unset($_SESSION['perfil']);
    }

    public static function AtualizaSessaoUsuario($dados)
    {
        $_SESSION['nome_usuario']=$dados[0]['Nome'];
       
    }

    public static function redirect($rota='')
    {
        header("Location: ".$config['BASE_URL']."?a=$rota");
    }

    public static function redirect_usuario($rota='')
    {
        header("Location: http://localhost:8080/Projeto/feuan-admin/?a=$rota");
    }

    public static function redirect_principal()
    {
        header("Location: http://localhost:8080/Projeto/?a=home");
    }
}

?>