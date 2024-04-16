<?php
include_once("../../dao/ManipulaDados.php");

function converter_nome($str) {
    return iconv("UTF-8", "ISO-8859-1", $str);
}

$dao = new ManipulaDados();
$dao->set_table("tb_comida");

$id = $_POST['fieldId'];
$comida = $dao->get_all_data_by_id("id", $id);

if (isset($_FILES["url"])) {
    $nome_arquivo = $_FILES['url']['name'];
    $url = "images/comida/".$nome_arquivo;
    
    $nome_arquivo_salvo = converter_nome($_FILES["url"]["name"]);
    $url_local_salvo = "../../images/comida/" . $nome_arquivo_salvo;
    move_uploaded_file($_FILES['url']['tmp_name'], $url_local_salvo);
}

$tabela = "tb_comida";
$fields = array('nome', 'descricao', 'ingredientes', 'preco', 'restaurante_id');
$dados = array($_POST['txtNome'], $_POST['txtDescricao'], $_POST['txtIngredientes'], $_POST['txtPreco'], $_POST['restaurante']);
if (isset($_FILES['url'])) {
    array_push($fields, 'url');
    array_push($dados, $url);
}
$pk_name = 'id';
$pk_value = $_POST['fieldId'];

$dao->update($tabela, $fields, $dados, $pk_name, $pk_value);
$status = $dao->get_status();

echo "<script>alert('$status')</script>";
echo "<script>location = '../principal.php?secao=manageComida'</script>";