<!DOCTYPE html>
<?php 
    require_once '../vendor/autoload.php';

 
    ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
</head>
<body>
    <h1>Editar informações do cliente</h1>
    <hr>
    <form action="../Controller/SalvarEdit.php" method="post">

        <label for="">
            Nome<br/>
            <input type="text" name="name" value="<?=$dados['nome'];?>">
        </label><br/><br/>

        <label for="">
            Idade: <br/>
            <input type="text" name="idade" value="<?=$dados['idade'];?>">
        </label><br/><br/>
        <input type="hidden" name="id" value="<?=$dados['idPessoa'];?>">

        <label for="">
            E-mail: </br>
            <input type="email" name="email" value="<?=$dados['email'];?>">
        </label><br/><br/>
        <label for="">
            E-mail: </br>
            <input type="text" name="cpf" value="<?=$dados['cpf'];?>">
        </label><br/><br/>

        <label>
            Celular: <br/>
            <input type="text" name="celular" value="<?=$dados['celular'];?>">
        </label><br/><br/>
        
        
        <input type="submit" value="Salvar">
    </form>
    
</body>
</html>