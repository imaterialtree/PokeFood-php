<?php
include_once("../../dao/ManipulaDados.php");


$id = $_POST['fieldId'];

$dao = new ManipulaDados();
$dao->set_table("tb_restaurante");
$restaurante = $dao->get_all_data_by_id("id", $id);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Restaurante</title>
    <link rel='stylesheet' type='text/css' href='../../css/bootstrap.css'>
    <link rel="stylesheet" href="../../css/pokefood.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Editar Restaurante</h1>
        <form action="alterarRestaurante.php" method="post" enctype="multipart/form-data" class="col-10 col-lg-6 mx-auto mt-5">
            <div class="mb-3">
                <label for="txtNome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="txtNome" id="txtNome" value=<?=$restaurante['nome']?>>
            </div>

            <div class="mb-3">
                <label for="txtDescricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="txtDescricao" id="txtDescricao" rows="3" required><?=$restaurante['descricao']?></textarea>
            </div>
            <div class="mb-3">
                <label for="txtCategoria" class="form-label">Categoria</label>
                <input class="form-control" type="text" name="txtCategoria" value=<?=$restaurante['categoria']?> required>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Imagem do Restaurante</label>
                <input class="form-control" type="file" name="url" value=<?=$restaurante['url']?>>
            </div>
            <input type="hidden" name="fieldId" value=<?= $id?>>
            <input type="submit" value="Salvar" class="btn btn-primary col-12">
        </form>
    </div>
</body>
</html>