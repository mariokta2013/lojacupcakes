<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['email_cliente'])) {
    include_once("conexao.php");

    $novoNome = $_POST['novoNome'];
    $email = $_SESSION['email_cliente'];

    // Atualizar o nome no banco de dados
    $sql = "UPDATE cadastro_cliente SET nome_cliente = '$novoNome' WHERE email_cliente = '$email'";
    $atualizarNome = $conexao->query($sql);

    if ($atualizarNome) {
        echo "Nome alterado com sucesso!";
    } else {
        echo "Erro ao alterar o nome.";
    }
} else {
    echo "Acesso inválido.";
}
?>