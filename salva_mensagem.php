<?php
include_once('conexao.php');

// Verificação do status da conexão
if ($conexao->connect_errno) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

// Verificação dos dados recebidos
if (isset($_POST['nome'], $_POST['email'], $_POST['assunto'], $_POST['mensagem'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Utilizando prepared statements
    $msg_contato = $conexao->prepare("INSERT INTO contatos(nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
    $msg_contato->bind_param("ssss", $nome, $email, $assunto, $mensagem);

    // Execução da consulta SQL
    if ($msg_contato->execute()) {
        echo "Dados inseridos no banco de dados com sucesso!";
    } else {
        echo "Erro no MySQL: " . $msg_contato->error;
    }

    $msg_contato->close();
} else {
    echo "Campos do formulário incompletos ou não enviados corretamente.";
}

// Fechamento da conexão
$conexao->close();
?>