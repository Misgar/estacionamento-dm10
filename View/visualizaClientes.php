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
    
    <table width="100%" border="2">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>E-mail</th>
            <th>Celular</th>
        </tr>
        <?php foreach($dados as $dbdata): ?>
        <tr>
            <td><?php echo $dbdata['nome']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>