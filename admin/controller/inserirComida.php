<?php
include_once("../../dao/ManipulaDados.php");

function converter_nome($str) {
    return iconv("UTF-8", "ISO-8859-1", $str);
}

$manipulador = new ManipulaDados();

$nome = $_POST["txtNome"];
$descricao = $_POST["txtDescricao"];
$ingredientes = $_POST["txtIngredientes"];
$preco = $_POST["txtPreco"];
$restaurante = $_POST['restaurante'];

$nome_arquivo = $_FILES['fileImagem']['name'];
$url = "images/comida/".$nome_arquivo;

$nome_arquivo_salvo = converter_nome($_FILES["fileImagem"]["name"]);
$url_local_salvo = "../../images/restaurante/" . $nome_arquivo_salvo;
move_uploaded_file($_FILES['fileImagem']['tmp_name'], $url_local_salvo);

$tabela = "tb_comida";
$fields = "nome, descricao, ingredientes, preco, imagem, restaurante_id";
$dados = "'$nome', '$descricao', '$ingredientes', '$preco', '$url', $restaurante";

$manipulador->insert($tabela, $fields, $dados);
$status = $manipulador->get_status();

echo "<script>alert($status)</script>";
echo "<script>location = '../principal.php?secao=cadRestaurante'</script>";