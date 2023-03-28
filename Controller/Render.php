<?php
require_once '../vendor/autoload.php';
class Render {
    ## Classe que renderiza informações na View, com parâmetros em array assoc.
    public function renderizarPagina($caminhoParaPagina, $dados = 0) {
        include($caminhoParaPagina);
    }
}


// git push origin master main -f
// composer dump-autoload
// Finalizad inserção dos dados e CONTINUAR.