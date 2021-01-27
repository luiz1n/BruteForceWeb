<?php

try {
    include "log.php";
    include "hoteis/main.php";

    function sucesso($usuario, $senha)
    {
        Logger::LogSuccess($usuario, $senha);
    }

    function error($usuario, $senha)
    {
        Logger::LogError($usuario, $senha);
    }

    $usuario = htmlspecialchars($_GET["usuario"]);
    $senha = htmlspecialchars($_GET["senha"]);
    $hotel = $_GET["hotel"];


    $checker = "undefined";

    if($hotel == "habblive" ) 
    {
        $checker = bf::habblive($usuario, $senha);
    }
    else if($hotel == "habborn")
    {
        $checker = bf::habborn($usuario, $senha);
    }

    else if($hotel == "habborp") 
    {
        $checker = bf::habborp($usuario, $senha);
    }

    else if($hotel == "habblet") 
    {
        $checker = bf::habblet($usuario, $senha);
    }

    else 
    {
        echo '<script> alert("hotel undefined") </script> ';
    }
    

    if ($checker == "ok") 
    {
        sucesso($usuario, $senha);
    }
     
    else 
    {
        error($usuario, $senha);
    }
}
catch (Exception $e)
{
    echo $e->getMessage(), "\n";
}


?>