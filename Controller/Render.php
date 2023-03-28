<?php
require_once '../vendor/autoload.php';
class Render {
    ## Classe que renderiza informações na View, com parâmetros em array assoc.
    public function renderizarPagina($caminhoParaPagina, $dados) {
        include($caminhoParaPagina);
    }
}

$modelListagem = new ListaClientes;

$render = new Render;
$dados = $modelListagem ->listaClientes();

$render->renderizarPagina('../View/visualizaClientes.php', $dados);
