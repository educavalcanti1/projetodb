<?php
require_once "conexao_agenda.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

    
    $result_usuario = "UPDATE amigo SET nome='$nome', email='$email', celular='$celular', cpf='$cpf' WHERE id='$id' ";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);

    if(mysqli_affected_rows($conexao)){
        echo "<p style='color:green;'>Usuário editado com sucesso</p>";
    }else{
        echo "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
    }
?>
<a href="consultar.php">Consultar</a>

