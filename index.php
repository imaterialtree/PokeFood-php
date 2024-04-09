<?php
if (!isset($_GET['secao'])) {
    header("Location: index.php?secao=home");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PokeFood</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap -->
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/pokefood.css">
</head>

<body>
    <?php include("includes/head.php"); ?>
        <div class="row">
            <?php include("includes/nav.php"); ?>
            <main class="col-10">
                <?php
                include_once("controller/verurl.php");
                $redirecionar = new VerUrl();
                $redirecionar->trocar_url(@$_GET["secao"]);
                ?>
            </main>
        </div>
        <?php include("includes/footer.php");?>

    <script src='js/bootstrap.js'></script>
</body>

</html>