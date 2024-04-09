<?php
include_once ("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->set_table("tb_comida");
$lista = $dados->get_all_data_table();

?>
<div class="container">
    <h2 class="display-5 mb-5">Cardápio</h2>
    <hr>

    <section>
        <table class="table table-striped table-hover" width="100%">
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
            foreach ($lista as $comida) {
                ?>
                <tr>
                    <td>
                        <?= $comida['id'] ?>
                    </td>
                    <td>
                        <?= $comida['nome'] ?>
                    </td>
                    <td>
                        <?= $comida['descricao'] ?>
                    </td>
                    <td>
                        <?= $comida['ingredientes'] ?>
                    </td>
                    <td>
                        <?= $comida['preco'] ?>
                    </td>
                    <td>
                        <img class="img-fluid" src=<?= $comida['imagem']?> alt="Foto do comida">
                    </td>
                    <td>
                        <form action="controller/alterarComidaForm.php" method="post">
                            <input type="hidden" name="fieldId" value=<?= $comida['id'] ?>>
                            <button type='submit' , name="action" value="editar" class="btn btn-transparent"><i
                            class="bi bi-pencil-square"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="controller/excluirComida.php" method="post">
                            <input type="hidden" name="fieldId" value=<?= $comida['id'] ?>>
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