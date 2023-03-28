<!DOCTYPE html>
<?php 
    require_once '../vendor/autoload.php';
    print_r($dados);
    ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
</head>
<body>
    <h1>Editar informações do Carro Cadastrado</h1>
    <hr>
    <form action="../Controller/SalvarEditCarro.php" method="post">

        <label for="">
            Nome proprietario<br/>
            <input type="text" name="name" value="<?=$dados['nome'];?>">
        </label><br/><br/>

        <label for="">
            Modelo do Veiculo: <br/>
            <input type="text" name="idade" value="<?=$dados['marcaCarro'];?>">
        </label><br/><br/>

        <label for="">
            Placa: <br/>
            <input type="text" name="idade" value="<?=$dados['placaCarro'];?>">
        </label><br/><br/>

        
        <input type="submit" value="Salvar">
    </form>
    
</body>
</html>