<?php
    session_start();
    require_once "./php/view/usuario.php";
    require_once "./php/view/tela_home.php";
    require_once "./php/controller/controller.php";
    
    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = explode("?",$uri)[0];
    $uri = preg_replace('/\/{2,}/','/',$uri);
    $uri = explode("/",$uri);
    $uri = array_splice($uri, 2);
    $tamanho = count ($uri);
    if ($uri[$tamanho-1]=="")
        array_pop($uri);
    $inicio = 0;
    
    $usuario = new Usuario();
    $home = new Home();
    
    if ($method=="GET" and $uri[$inicio]=="login" and count($uri)==1)
        //Exibe formulario de Login
        $usuario->getLogin ();
    else if ($method=="POST" and $uri[$inicio]=="login" and count($uri)==1)
    {
        //Valida o login
        $usuario->postLogin ();
    }
    else if ($method=="GET" and $uri[$inicio]=="home" and count($uri)==1 and $_SESSION["validar"] == true)
    {
        //Se Login ok, vai para Home
        $home->home ();
    }
    else if ($method=="POST" and $uri[$inicio]=="usuario" and count($uri)==1 and $_SESSION["validar"] == true)
    {
        //
        $usuario->post ();
    }
    else
    {
        echo "<h1>Página não encontrada</h1>";
        $resposta = ['uri'=>$uri,'method'=>$method];
        echo json_encode($resposta);
    }

    
?>
