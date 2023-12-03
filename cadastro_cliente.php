<?php
    if (isset($_POST['submit'])) {
        include_once("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        // Se não houver erros, proceder com a inserção
        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_cliente(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES('$nome', '$email', '$senha', '$sexo')");
        
        if (!$clientes) {
            die('Erro: ' . mysqli_error($conexao));
        } else {
            // Remova qualquer saída antes do header()
            header('Location: entrar.php');
            exit(); // Importante: sempre usar exit() após o header()
        }
    }
?>
