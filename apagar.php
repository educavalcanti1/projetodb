<?php 
session_start ();
include_once("conexao_agenda.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "DELETE FROM amigo WHERE id='$id'";
$resultado_usuario = mysqli_query($conexao,$result_usuario);
if (mysqli_affected_rows($conexao)) {
$_SESSION['msg'] = "<h2>Usuário apagado com sucesso</h2>";
var_dump ($_SESSION);
header("Location: consultar.php");
}