<?php
include_once("../dao/ManipulaDados.php");

$dados = new ManipulaDados();
$dados->set_table("tb_usuario");
$lista = $dados->get_all_data_table();
?>
<section>
    <?php
    foreach ($lista as $usuario) {
    ?>
        <h1><?= $usuario['nome'] ?></h1>
        <?php
    }
    ?>
</section>