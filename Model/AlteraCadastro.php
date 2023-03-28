<?php
require_once('../vendor/autoload.php');

class AlteraCadastro{

    private $status = '0';

    public function alterarCadastroCpf($nome, $idade, $email, $celular, $cpfNovo, $cpfBd)
    {
        $pdo = new DBConnection;

        $query = $pdo->returnConnection()->prepare(
            "UPDATE carrosestacionados, proprietarios SET nome = :nome, idade = :idade, email = :email, celular = :celular
            cpfProprietario = :cpfNovo, ativo = $this->status 
             WHERE cpfProprietario = :cpfBd AND cpf = :cpfBd"
        );

        $query->bindValue(':nome', $nome);
        $query->bindValue(':idade', $idade);
        $query->bindValue(':email', $email);
        $query->bindValue(':celular', $celular);
        $query->bindValue(':cpfNovo', $cpfNovo);
        $query->bindValue(':cpfBd', $cpfBd );

        $query->execute();

    }
    public function alterarCadastro($nome, $idade, $email, $celular, $id)
    {
        $pdo = new DBConnection;

        $query = $pdo->returnConnection()->prepare(
            "UPDATE carrosestacionados, proprietarios SET nome = :nome, idade = :idade, email = :email,
             celular = :celular  WHERE idPessoa = :id "
        );

        $query->bindValue(':nome', $nome);
        $query->bindValue(':idade', $idade);
        $query->bindValue(':email', $email);
        $query->bindValue(':celular', $celular);
        $query->bindValue(':id', $id);
        

        $query->execute();

    }
    public function alterarCadastroCarro($idCarro, $marcaCarro, $placaCarro)
    {
        $pdo = new DBConnection;

        $query = $pdo->returnConnection()->prepare(
            "UPDATE carroestacionados SET marcaCarro = :modelo, placaCarro = :placa WHERE idCarro = :id"
        );

        $query->bindValue(':modelo', $marcaCarro);
        $query->bindValue(':placa', $placaCarro);

        $query->execute();
    }

}