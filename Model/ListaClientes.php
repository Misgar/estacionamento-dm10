<?php
require_once "../vendor/autoload.php";

Class ListaClientes{
    
     function listaClientes()
     {

        $pdo = new DBConnection;

        $dados = [];

        $sql = $pdo->returnConnection()->query("SELECT * FROM proprietarios");

        if($sql -> rowCount() > 0)
        {
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $dados;

        }

    }

    public function listaClientesCarros()
    {
        $pdo = new DBConnection;

        $dados = [];

        $sql = $pdo->returnConnection()->query
        ("
        SELECT nome, cpf, email, marcaCarro FROM proprietarios, carrosEstacionados WHERE cpf = cpfProprietario
        ");

        if($sql -> rowCount() > 0)
        {
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $dados;
        }
    }

}

