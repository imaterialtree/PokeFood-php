<?php
include_once("../dao/ManipulaDados.php");

$dados = new ManipulaDados();
$dados->set_table("tb_usuario");
$lista = $dados->get_all_data_table();
?>
<div class='container'>
    <h2 class="display-5 mb-5">Lista de usuários</h2>
    <table id="tabela-restaurantes" class="table table-striped table-hover" width="80%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php
        foreach ($lista as $usuario) {
            ?>
            <tr>
                <td>
                    <?= $usuario['nome'] ?>
                </td>
                <td>
                    <?= $usuario['email'] ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>