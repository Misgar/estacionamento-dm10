<?php
require_once('../vendor/autoload.php');

$cpf = filter_input(INPUT_GET, 'cpf');

echo $cpf;

$objDelete = new ApagaRegistro;
$render = new Render;

$objDelete->excluirRegistro($cpf);

$render->renderizarPagina('../View/editCarro.php');

