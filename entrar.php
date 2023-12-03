
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Loja de Cupcakes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="login">
    <header>
        <img src="imagens/LOGO1.jpg" alt="Logo da Loja de Cupcakes">
        <h1>Login - Loja de Cupcakes</h1>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="cardapio.html">Cardápio</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="cadastro.html">Cadastro</a></li>
                <li><a href="entrar.php" class="active">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="login-form">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email">
                <br/>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha">
                <br/>
                <input type="submit" class="btn" name="submit" value="Entrar">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Loja de Cupcakes</p>
    </footer>
</body>
</html>