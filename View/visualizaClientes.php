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
            <th>Ações</th>
        </tr>
        <?php foreach($dados as $dbdata): ?>
        <tr>
            <td><?php echo $dbdata['nome']; ?></td>
            <td><?php echo $dbdata['idade']; ?></td>
            <td><?php echo $dbdata['email']; ?></td>
            <td><?php echo $dbdata['celular']; ?></td>
            
            <td>
                <a href="InformacoesCliente.php?id=<?=$dbdata['idPessoa'];?>">[ Editar ]</a>
                <a href="../Controller/ListagemClientesCarros.php?cpf=:<?=$dbdata['cpf']; ?>">[Consultar Carros]</a>
            </td>
        </tr>
        
        <?php endforeach; ?>
    </table>
    <a href="../View/index.php">Voltar ao inicio</a>
</body>
</html>