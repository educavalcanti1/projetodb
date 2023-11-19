<?php
session_start();
include_once("conexao_agenda.php");
$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM amigo WHERE id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);



?>
<html>
<head>
    <title>Editar dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }
        .box{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
        }

    </style>
</head>
<body>

    <h1><center>Editar amigo</center></h1>
    <br>
   
    <form method="post" action="http://localhost/crud/bd/proc_editar_agenda.php"><center>
        <div>
        <input type="hidden" name="id" value="<?php echo $row_usuario ['id']; ?>">
            <label>Nome do amigo</label>
            <input type="text" name="nome" value="<?php echo $row_usuario ['nome']; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $row_usuario ['email']; ?>">
        </div>
        <div>
            <label>Celular</label>
            <input type="text" name="celular" value="<?php echo $row_usuario ['celular']; ?>">
        </div>
        <div>
            <label>CPF</label>
            <input type="text" name="cpf" value="<?php echo $row_usuario ['cpf']; ?>">
        </div>
        
    
        <button type="submit">Editar</button>
        
    </form></center>
</body>
</html>