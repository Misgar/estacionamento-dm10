<?php
require_once "../vendor/autoload.php";

Class ListaClientes{
    
     function listaClientes()
     {

        $pdo = new DBConnection;

        $dados = [];

        $sql = $pdo->returnConnection()->prepare("SELECT * FROM proprietarios WHERE ativo = 1");
        $sql->execute();
        if($sql -> rowCount() > 0)
        {
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            return $dados;
        }

    }

    function listaUnicoCliente($id)
     {

        $pdo = new DBConnection;

        $dados = [];

        $sql = $pdo->returnConnection()->prepare("SELECT * FROM proprietarios WHERE ativo = 1 AND idPessoa = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql -> rowCount() > 0)
        {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            
            return $dados;
        }

    }

    public function listaClientesCarros($cpf)
    {
        $pdo = new DBConnection;

        $dados = [];

        $sql = $pdo->returnConnection()->prepare
        ("
        SELECT * FROM proprietarios, carrosEstacionados WHERE cpf = cpfProprietario
        ");
        
        $sql->execute();

        if($sql -> rowCount() > 0)
        {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);

            return $dados;
        }
    }
}

