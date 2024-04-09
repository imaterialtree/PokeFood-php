<?php
include_once("dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->set_table("tb_restaurante");
$lista = $dados->get_all_data_table();

?>
<div class="container">
    <h2 class="display-5 mb-5">Restaurantes</h2>
    <hr>
    <div class="card-columns">
        <?php
        foreach ($lista as $restaurante) {
        ?>
            <div class="card col-4">
                <img class="card-img-top" src='<?= $restaurante['url'] ?>' alt="Imagem do restaurante">
                <div class="card-body">
                    <h5 class="card-title"> <?= $restaurante['nome'] ?></h5>
                    <p class="card-text"> <?= $restaurante['descricao'] ?></p>
                    <p class="card-text"><strong> Categoria:</strong> <?= $restaurante['categoria']  ?> </p>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</div>