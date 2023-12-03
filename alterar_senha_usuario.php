<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['email_cliente'])) {
    include_once("conexao.php");

    $novaSenha = $_POST['novaSenha'];
    $email = $_SESSION['email_cliente'];

    // Atualizar a senha no banco de dados
    $sql = "UPDATE cadastro_cliente SET senha_cliente = '$novaSenha' WHERE email_cliente = '$email'";
    $atualizarSenha = $conexao->query($sql);

    if ($atualizarSenha) {
        echo "Senha alterada com sucesso!";
    } else {
        echo "Erro ao alterar a senha.";
    }
} else {
    echo "Acesso inválido.";
}
?>