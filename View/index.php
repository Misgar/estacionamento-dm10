<!DOCTYPE html>
<?php

session_start()

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" >
</head>
<body>
<h2>Cadastrar Estacionamento</h2>
<hr>
<div class="container" id="container">
    <div class="form">
        <form action="../Controller/NovoEstacionamento.php" method="post" >
            Nome <input type="text" name="nome" id="nome"><br><br>
            Idade <input type="text" class="idade" name="idade"><br> <br>
            CPF <input type="text" name="cpf" id="cpf"><br> <br>
            Email <input type="email" name="email"> <br><br> 
            Celular <input type="text" name="celular" id="cpf"><br><br>
            Modelo <input type="text" name="modelo"> <br> <br>
            Placa do veículo<input type="text" name="placa"> <br> <br>

            <input type="submit" value="Cadastrar">
        </form>
        <a href="../Controller/ListagemClientes.php">Consultar Proprietarios</a>
    </div>
</div> 
</body>
</html>