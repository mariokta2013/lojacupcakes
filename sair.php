<?php
session_start();
unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);

// Redirecionar para outra página antes de qualquer saída
header("Location: index.html");
exit();

// Mensagem de depuração (remova ou comente se não for necessário)
echo "Logout realizado com sucesso";
?>