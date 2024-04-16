<?php
include_once("../../dao/ManipulaDados.php");

$db_manipular = new ManipulaDados();

$table = "tb_comida";
$pk_name = 'id';
$id = $_POST['fieldId'];

$db_manipular->delete($table, $pk_name, $id);
$status = $db_manipular->get_status();
echo "<script>alert($status)</script>";
echo "<script>location = '../principal.php?secao=listarComida'</script>";
