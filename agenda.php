
<html>
<head>
    <title>Agenda</title>
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

    <h1><center>Agenda de amigos</center></h1>
    <br>
   
    <form method="post" action="http://localhost/crud/bd/inserir_agenda.php"><center>
        <div>
            <label>Nome do amigo</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Celular</label>
            <input type="text" name="celular">
        </div>
        <div>
            <label>CPF</label>
            <input type="text" name="cpf">
        </div>
        
    
        <button type="submit">Cadastrar</button>
        <a href="homee.html">Pagina inicial</a>
    </form></center>
</body>
</html>