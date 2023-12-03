<?php
session_start();

if ((!isset($_SESSION['email_cliente']) || !isset($_SESSION['senha_cliente']))) {
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location: entrar.php');
    exit();
} else {
    $logado = $_SESSION['email_cliente'];
}

echo "Usuário logado: $logado"; // Mensagem de depuração
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Loja de Cupcakes</title>
    <link rel="stylesheet" href="css/styles.css">       
</head>
<body class="area_usuario">
    <header>
        <img src="imagens/LOGO1.jpg" alt="Logo da Loja de Cupcakes">
        <h1>Loja de cupcakes</h1>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="cardapio.html">Cardápio</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="cadastro.html" class="active">Cadastro</a></li> <!-- Link para a página de Cadastro -->
                <li><a href="login.php">Login</a></li> <!-- Link para a página de Login -->
            </ul>
        </nav>
    </header>
        <section class="barra_top">
            <div class ="barra">
                <h1>Área do Usuário</h1>
                <a href="sair.php">SAIR</a>
                <a href="alterar_senha_usuario_form.php">Alterar Senha</a>
                <a href="alterar_nome_usuario_form.php">Alterar Nome</a>
            </div>
        </section>

        <section class="usuario">
            <?php
                echo "<H2>Olá, $logado</h2>"
            
            ?>
            <p>Seja bem-vindo a loja de Cupcakes mais procurada da cidade.</p>

           
        </section>
    <footer>
        <p>&copy; 2023 Loja de Cupcakes</p>
    </footer>  
      
</body>
</html>
