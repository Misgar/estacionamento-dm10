<?php
require_once '../vendor/autoload.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'name');
$idade = filter_input(INPUT_POST, 'idade');
$email = filter_input(INPUT_POST, 'email');
$celular = filter_input(INPUT_POST, 'celular');
$cpf = filter_input(INPUT_POST, 'cpf');

$objEdit = new EditClientInfo;


$objEdit->alteraDadosCliente($id, $nome, $cpf, $idade, $email, $celular);
