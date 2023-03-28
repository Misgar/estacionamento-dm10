<?php
require_once('../vendor/autoload.php');

class ApagaRegistro{
    function excluirRegistro($cpf)
    {
        try
        {

            $pdo = new DBConnection;
            $sqlDeleteCarro = $pdo->returnConnection()->prepare('DELETE FROM carrosestacionados WHERE cpfProprietario = :cpf');

            $sqlDeleteProprietario = $pdo->returnConnection()->prepare('DELETE FROM proprietario WHERE cpf = :cpf');

            $sqlDeleteCarro->bindValue(':cpf', $cpf);

            $sqlDeleteProprietario->bindValue(':cpf', $cpf);

            $sqlDeleteCarro -> execute();
            $sqlDeleteProprietario -> execute();



        } catch(Exception $e){
           
        }
        
    }
}