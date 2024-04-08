<?php
include_once ("../dao/ManipulaDados.php");
$db_manipular = new ManipulaDados();

$db_manipular->set_table("tb_restaurante");
$restaurantes = $db_manipular->get_all_data_table();

?>

<div class="container">
    <h2 class='display-5 mb-5'>CADASTRO COMIDA</h1>
        <form action="controller/inserirComida.php" method="post" enctype="multipart/form-data"
            class="col-10 col-lg-6 mx-auto">
            <div class="mb-3">
                <label for="txtNome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="txtNome" id="txtNome">
            </div>

            <div class="mb-3">
                <label for="txtDescricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="txtDescricao" id="txtDescricao" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="txtIngredientes" class="form-label">Ingredientes</label>
                <textarea class="form-control" name="txtIngredientes" id="txtIngredientes" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="txtPreco" class="form-label">Preço(R$)</label>
                <input class="form-control" type="number" name="txtPreco" required>
            </div>
            <div class="mb-3">
                <label for="fileImagem" class="form-label">Imagem</label>
                <input class="form-control" type="file" name="fileImagem" required>
            </div>
            <div class="mb-3">
                <label for="restaurante">Restaurante</label>
                <select name="restaurante">
                    <?php foreach ($restaurantes as $r) { ?>
                        <option value="<?= $r['id'];?>"><?= $r['nome'];?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Salvar" class="btn btn-primary col-12">
        </form>
</div>