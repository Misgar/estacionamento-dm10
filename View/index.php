<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" >
</head>
<body>
<h2>VENDER CARRO</h2>
<div class="container" id="container">
    <div class="form">
        <form action="vendaCarro.php" method="post" >

            Nome <input type="text" name="nome" id="nome"><br><br>
            Idade <input type="text" class="idade" name="idade"><br> <br>
            Documento <input type="text" name="documento" id="rg"><br> <br>
            <label for="carros"> Carro desejado </label>

                <select name="carroEscolhido" id="carros">
                
                    <option value="Ford KA"> Ford KA </option>
                    <option value="BMW"> BMW</option>

                </select>
                <br>
                <input type="submit" name="submit" value="Enviar">

        </form>
    </div>
</div> 
</body>
</html>