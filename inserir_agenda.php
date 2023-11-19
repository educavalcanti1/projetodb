<?php
require_once "conexao_agenda.php";

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];

    // Corrigindo a sintaxe SQL
    $sql = "INSERT INTO amigo (nome, email, celular, cpf) VALUES ('$nome', '$email', '$celular', '$cpf')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastrado";
    } else {
        // Capturando o erro da consulta corretamente
        echo "Erro: " . $conexao->error;
    }

    // Fechando a conexão após o uso
    $conexao->close();
}
?>
<a href="consultar.php">Consultar</a>
