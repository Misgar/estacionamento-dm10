<?php
require_once "../vendor/autoload.php";


Class ViewController{
    public $id = 1;

    public function retorno() {
        $r = 'Você acessou ViewController via autoload';
        return $r;
    }

}

$cadastrarCliente2 = new Cadastrarcliente();

echo $cadastrarCliente2->retornoCadastro();