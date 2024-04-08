<?php
include_once("../dao/ManipulaDados.php");
$manipulador = new ManipulaDados();

//verifica se o cookie foi inicializado
if (isset($_COOKIE["nome_usuario"]))
    $nome_usuario = $_COOKIE["nome_usuario"];


if (isset($_COOKIE["senha_usuario"]))
    $senha_usuario = $_COOKIE["senha_usuario"];

if (!(empty($nome_usuario) || empty($senha_usuario))) {
    if ($manipulador->validar_login($nome_usuario, $senha_usuario)) {
        // header("location: principal.php");
    }
    else {
        setcookie("nome_usuario");
        setcookie("senha_usuario");
        header("location: ../index.php?secao=a-login");
    }
}