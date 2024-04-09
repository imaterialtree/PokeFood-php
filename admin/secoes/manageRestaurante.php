<?php
include_once ("../dao/manipuladados.php");

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
                    <th>Categoria</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
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
                    <td>
                        <?= $restaurante['categoria'] ?>
                    </td>
                    <td>
                        <img class="img-fluid" src="../<?= $restaurante['url']?>" alt="Foto do restaurante">
                    </td>
                    <td>
                        <form action="controller/alterarRestauranteForm.php" method="post">
                            <input type="hidden" name="fieldId" value=<?= $restaurante['id'] ?>>
                            <button type='submit' , name="action" value="editar" class="btn btn-transparent"><i
                            class="bi bi-pencil-square"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="controller/excluirRestaurante.php" method="post">
                            <input type="hidden" name="fieldId" value=<?= $restaurante['id'] ?>>
                            <button type='submit' , name="action" value="excluir" class="btn btn-outline-danger"><i
                                    class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </section>

</div>