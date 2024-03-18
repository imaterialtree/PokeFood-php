<?php
include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->set_table("tb_restaurante");
$lista = $dados->get_all_data_table();

?>
<div class="container">
    <h2 class="display-5 mb-5">Restaurantes Filiais </h2>
    <hr />


    <section>
        <table id="tabela-restaurantes" class="table table-striped table-hover" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <?php
            foreach ($lista as $restaurante) {
            ?>
                <tr>
                    <td>
                        <?= $restaurante['id'] ?>
                    </td>
                    <td>
                        <?= $restaurante['nome'] ?>
                    </td>
                    <td>
                        <?= $restaurante['descricao'] ?>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </section>

</div>