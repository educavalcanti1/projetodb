<?php
$localhost="127.0.0.1"; //numero do servidor no phpmyadmin
$usuario="root";
$senha="";
$banco="agenda"; //nome banco de dados criado no phpmyadmin
$conexao=new mysqli($localhost, $usuario, $senha, $banco);
if($conexao->connect_error){
    die("Erro conexão".$conexao->connect_error);
} else {
    echo "";
}

?>