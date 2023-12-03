<?php
    $servidor= "localhost";
    $usuario= "id21612030_administrador";
    $senha= "Emanuel15*";
    $banco= "id21612030_lojadecupcakes";

    $conexao= new MYSQLI($servidor, $usuario, $senha, $banco);

    if($conexao -> connect_errno){
        echo "Erro de conexão com o banco de dados";       
        $conexao->set_charset("utf8");  // Adiciona esta linha
    }
?>