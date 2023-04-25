<?php session_start(); 
    include "../../clases/Auth.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if($Auth->logear($usuario, $password)){
        header("location:../../indexadministrador.php");
    }else{
        echo "No se pudo logear";
    }
?>