<?php
require_once "../vendor/autoload.php";

Class Cadastrarcliente
{

    function cadastraCliente($nome, $cpf, $idade, $email, $celular, $modeloCarro, $placa)
    {
            $pdo = new DBConnection;
            $sql = $pdo->returnConnection()->prepare("SELECT * FROM proprietarios WHERE cpf = :cpf");
            $sql->bindValue(':cpf', $cpf);
            $sql->execute();


            if($sql->rowCount() > 0){
                
                $sql = $pdo->returnConnection()->prepare("INSERT INTO carrosEstacionados (cpfProprietario, placaCarro, marcaCarro) VALUES (:cpfProprietario, :placaCarro, :marcaCarro)"); 

                $sql->bindValue(':cpfProprietario', $cpf);
            
        
                $sql->bindValue(':placaCarro', $placa);

                $sql->bindValue(':marcaCarro', $modeloCarro);
                $sql->execute();
                exit;
            }
        {

            #inserindo o dado na tabela proprietarios
            $sql = $pdo->returnConnection()->prepare("INSERT INTO proprietarios (nome, idade, cpf, email, celular) VALUES (:nome, :idade, :cpf, :email, :celular)");
            $sql->bindValue(':nome', $nome);
            $sql->bindParam(':idade', $idade);
            $sql->bindParam(':cpf', $cpf);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':celular', $celular);
            $sql->execute();
            
            #relacionando proprietarios a carro na tabela carrosEstacionados
            $sql = $pdo->returnConnection()->prepare("INSERT INTO carrosEstacionados (cpfProprietario, placaCarro, marcaCarro) VALUES (:cpfProprietario, :placaCarro, :marcaCarro)"); 
            $sql->bindValue(':cpfProprietario', $cpf);
           # $sql->bindValue(':cpfProprietario', $pdo->returnConnection()->lastInsertId());
            #Ultimo ID (PK) inserido no cadastro de venda
    
            $sql->bindValue(':placaCarro', $placa);

            $sql->bindValue(':marcaCarro', $modeloCarro);
            $sql->execute();


        }
     }
     public function cadastraUnicoCliente($nome, $cpf, $idade, $email, $celular){
        $pdo = new DBConnection;
        
        $sql = $pdo->returnConnection()->prepare
            ("INSERT INTO proprietarios 
            (cpf, nome, idade, email, celular) VALUES
            (:cpf, :nome, :idade, :email, :celular)
            ");

        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':idade', $idade);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':celular', $celular);

        $sql->execute();

     }
}