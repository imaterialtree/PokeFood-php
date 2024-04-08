<?php
session_start();
include_once("../dao/ManipulaDados.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$dados_login = new ManipulaDados();
$dados_login->set_table("tb_usuario");

if ($dados_login->validar_login($usuario, $senha)) {
    //Setter no Cookie
    setcookie("nome_usuario", $usuario);
    setcookie("senha_usuario", $senha);

    //direcionar para tela principal
    $_SESSION['usuario'] = $usuario;
    header("location: principal.php");
} else {
    echo '<script> alert("usuario ou senha errado")</script>';
    header("location: ../index.php?secao=a-login");
}