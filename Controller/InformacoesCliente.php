<?php
require_once '../vendor/autoload.php';

$id = filter_input(INPUT_GET, 'id');

$editObj = new EditClientInfo;

$consultaObj = new ListaClientes;


$editObj->retornaDadosCliente($id);