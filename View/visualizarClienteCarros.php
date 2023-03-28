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
            <th>Modelo Carro</th>
            <th>Placa</th>
            <th>Proprietario</th>
            <th>Ações</th>

        </tr>
        <?php foreach($dados as $dbdata): ?>
        <tr>
            <td><?php echo $dbdata[0]['marcaCarro']; ?></td>
            <td><?php echo $dbdata['placaCarro']; ?></td>
            <td><?php echo $dbdata['nome']; ?></td>
    
            
            <td>
                <a href="../Controller/InformacoesCliente.php?id=<?=$dbdata['idPessoa'];?>">[ Editar ]</a>
                <a href="../Controller/Excluir.php?cpf=<?=$dbdata['cpf'];?>">[ Excluir ]</a>
                
            </td>
        </tr>
        
        <?php endforeach; ?>
    </table>
</body>
</html>