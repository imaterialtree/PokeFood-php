<?php // Verifica se há erro na URL, no caso do login
if (isset($_GET['erro']) && $_GET['erro'] == 1) {
    echo '<div class="alert alert-danger" role="alert">Usuário ou senha incorretos!</div>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login do Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/estilo.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container mt-5">

        <h2 class="text-center">Login</h2>
        <form action="admin/login.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-secondary">Limpar</button><br />
        </form>
    </div>


</html>



<script src='main.js'></script>
</body>

</html>