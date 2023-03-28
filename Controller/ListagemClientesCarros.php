<?php

require_once '../vendor/autoload.php';

$cpf = filter_input(INPUT_GET, 'cpf');

$modelListagem = new ListaClientes;

$render = new Render;

$dados = $modelListagem->listaClientesCarros($cpf);

$render->renderizarPagina('../View/visualizarClienteCarros.php', $dados);


