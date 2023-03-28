<?php

require_once '../vendor/autoload.php';

$modelListagem = new ListaClientes;

$render = new Render;

$dados = $modelListagem->listaClientes();

$render->renderizarPagina('../View/visualizaClientes.php', $dados);


