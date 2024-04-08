<?php
include_once("../../dao/ManipulaDados.php");

function converter_nome($str) {
    return iconv("UTF-8", "ISO-8859-1", $str);
}

$manipulador = new ManipulaDados();

$nome = $_POST["txtNome"];
$descricao = $_POST["txtDescricao"];
$categoria = $_POST["txtCategoria"];

$nome_arquivo = $_FILES['fileImagem']['name'];
$url = "images/restaurante/".$nome_arquivo;

$nome_arquivo_salvo = converter_nome($_FILES["fileImagem"]["name"]);
$url_local_salvo = "../../images/restaurante/" . $nome_arquivo_salvo;
move_uploaded_file($_FILES['fileImagem']['tmp_name'], $url_local_salvo);

$tabela = "tb_restaurante";
$fields = "nome, descricao, categoria, url";
$dados = "'$nome', '$descricao', '$categoria', '$url'";

$manipulador->insert($tabela, $fields, $dados);
$status = $manipulador->get_status();
// echo "
// <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
//   <div class='toast-header'>
//     <strong class='me-auto'>Bootstrap</strong>
//     <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
//   </div>
//   <div class='toast-body'>
//     $status
//   </div>
// </div>
// ";

echo "<script>alert('$status');
location = '../principal.php?secao=cadRestaurante'</script>";