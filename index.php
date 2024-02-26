<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PokeFood</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel="stylesheet" href="css/pokefood.css">
    <script src='js/bootstrap.js'></script>
</head>
<body>
    <div class="containter text-center justify-content-center">

    <?php
        include("includes/head.php");
        include("includes/nav.php");
    ?>
    <main>
        <?php
        include_once("controller/verurl.php");
        $redirecionar = new VerUrl();
        $redirecionar->trocar_url(@$_GET["secao"]);
        ?>
</main>
        <?php
        include("includes/footer.php");
    ?>
    </div>
</body>
</html>