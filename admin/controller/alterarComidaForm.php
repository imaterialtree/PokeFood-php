<?php
include_once("../../dao/ManipulaDados.php");


$id = $_POST['fieldId'];

$dao = new ManipulaDados();
$dao->set_table("tb_comida");
$comida = $dao->get_all_data_by_id("id", $id);

$dao->set_table("tb_restaurante");
$restaurantes = $dao->get_all_data_table();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prato</title>
    <link rel='stylesheet' type='text/css' href='../../css/bootstrap.css'>
    <link rel="stylesheet" href="../../css/pokefood.css">
</head>

<body>
    <div class="container">
        <h2 class='display-5 mb-5'>EDITAR COMIDA</h1>
            <form action="alterarComida.php" method="post" enctype="multipart/form-data" class="col-10 col-lg-6 mx-auto">
                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="txtNome" id="txtNome" value="<?= $comida['nome'] ?>">
                </div>

                <div class="mb-3">
                    <label for="txtDescricao" class="form-label">Descrição</label>
                    <textarea class="form-control" name="txtDescricao" id="txtDescricao" rows="3" required><?= $comida['descricao'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="txtIngredientes" class="form-label">Ingredientes</label>
                    <textarea class="form-control" name="txtIngredientes" id="txtIngredientes" rows="3" required><?= $comida['ingredientes'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="txtPreco" class="form-label">Preço(R$)</label>
                    <input class="form-control" type="number" name="txtPreco" required value="<?= $comida['preco'] ?>">
                </div>
                <div class="mb-3">
                    <label for="fileImagem" class="form-label">Imagem</label>
                    <input class="form-control" type="file" name="fileImagem">
                </div>
                <div class="mb-3">
                    <label for="restaurante">Restaurante</label>
                    <select name="restaurante">
                        <?php foreach ($restaurantes as $r) { ?>
                            <option value="<?= $r['id']; ?>"><?= $r['nome']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="hidden" name="fieldId" value=<?= $id ?>>
                <input type="submit" value="Salvar" class="btn btn-primary col-12">
            </form>
    </div>
</body>