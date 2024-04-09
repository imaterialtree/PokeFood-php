<?php
include_once("dao/ManipulaDados.php");
$db_manipular = new ManipulaDados();
$db_manipular->set_table("tb_restaurante");

$restaurantes = $db_manipular->get_all_data_table();
if (!isset($_GET['restaurante'])) {
    header("Location:index.php?secao=cardapio&restaurante=1");
}
?>

<div class="container">
    <h2 class="display-5 mb-5">Cardápio</h2>
    <hr>
    <form action="index.php" method="get" id="formFiltraRestaurante">
        <input type="hidden" name=secao value="cardapio">
        <label for="restaurante">Escolha um restaurante</label>
        <select name="restaurante" onchange="submitForm()">
            <?php foreach ($restaurantes as $r) {
                $selected = $_GET['restaurante'] == $r['id'] ? "selected" : "";
                echo "<option value=" . $r['id'] . " $selected>" . $r['nome'] . "</option>";
            } ?>
        </select>
    </form>
</div>
<script>
    function submitForm() {
        document.getElementById("formFiltraRestaurante").submit();
    }
</script>

<div class="card-columns">
    <?php
    $cardapio = $db_manipular->get_by_fk($_GET['restaurante']);
    echo implode(", ", $cardapio);
    echo $_GET['restaurante'];
    foreach ($cardapio as $comida) {
    ?>
        <div class="card col-4">
            <img class="card-img-top" src='<?= $comida['url'] ?>' alt="Imagem da comida">
            <div class="card-body">
                <h5 class="card-title"> <?= $comida['nome'] ?></h5>
                <p class="card-text"> <?= $comida['descricao'] ?></p>
                <p class="card-text"><strong> Categoria:</strong> <?= $comida['categoria']  ?> </p>
                <p class="card-text"><strong> Ingredientes:</strong> <?= $comida['ingredientes']  ?> </p>
            </div>
        </div>

    <?php
    }
    ?>
</div>