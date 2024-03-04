<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeFood - Admin</title>
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel="stylesheet" href="../css/pokefood.css">
    <script src='../js/bootstrap.js'></script>
</head>

<body>
    <?php
    include("includes/head.php");
    include("includes/nav.php");
    ?>
    <main>
        <?php
        include_once("controller/verUrl.php");
        $redirecionar = new VerUrl();
        $redirecionar->trocar_url(@$_GET["secao"]);
        ?>
    </main>
    <?php
    include("includes/footer.php");
    ?>
</body>

</html>