<?php
// Verificação se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        
        $username = $_POST['usuario'];
        $password = $_POST['senha'];

        // Validar usuário e senha (fake)
        if ($username === 'usuario' && $password === 'senha') {
            echo "<h1 style= 'color:green; text-align:center; margin-top:200px;'> Login bem sucedido, bem vindo à sua conta. </h1> <br>";
            //redirecionar para tela de login
            
            header("location: principal.php");
    
        } else {
            // Login inválido - exibir uma mensagem de erro e redirecionar para a tela de login
            
            header("location: ../index.php?secao=ademiro&erro=1");
           
        }
    } else {
        // Campos de usuário ou senha não estão definidos(nunca chega aqui porque botei um required no hmtl)
        echo "Por favor, insira um usuário e senha.";
    }
}
?>