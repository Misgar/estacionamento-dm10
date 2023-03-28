<?php
require_once '../vendor/autoload.php';

class EditClientInfo{
    private $id;
    private $nome;

    private $idade;

    private $email;

    private $celular;

    private $cpf;

    function __construct()
    {
        $this->id = filter_input(INPUT_GET, 'id');
        $this->id = filter_input(INPUT_GET, 'nome');
        $this->id = filter_input(INPUT_GET, 'idade');
        $this->id = filter_input(INPUT_GET, 'email');
        $this->id = filter_input(INPUT_GET, 'celular');
        $this->id = filter_input(INPUT_GET, 'cpf');

    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function retornaDadosCliente($id){
        $arrayInfo = [];

        $objModel = new ListaClientes;
        $objRender = new Render;

        $arrayInfo = $objModel->listaUnicoCliente($id);

        $objRender->renderizarPagina('../View/editarCliente.php', $arrayInfo);

        return $arrayInfo;
    }

    public function alteraDadosCliente($id, $nome, $cpf, $idade, $email, $celular)
    {
        $arrayInfo = [];

        $objInfo = new ListaClientes;
        $objUpdate = new AlteraCadastro;
        $objCad = new Cadastrarcliente;

        $arrayInfo = $objInfo->listaUnicoCliente($id);

        

        if ($cpf != $arrayInfo['cpf'])
        {
            $objCad ->cadastraUnicoCliente($nome, $cpf, $idade, $email, $celular);

            $objUpdate->alterarCadastroCpf($nome, $idade, $email, $celular, $cpf, $arrayInfo['cpf']);

            header("location: ListagemClientes.php");
        } else
        {
           
           $objUpdate->alterarCadastro($nome, $idade, $email, $celular, $id);
           header("location: ListagemClientes.php");
        

        }
        
       
    }
    public function alteraDadosCarro($id, $nome, $cpf, $idade, $email, $celular)
    {
        $arrayInfo = [];

        $objInfo = new ListaClientes;
        $objUpdate = new AlteraCadastro;
        $objCad = new Cadastrarcliente;

        $arrayInfo = $objInfo->listaUnicoCliente($id);

        

        if ($cpf != $arrayInfo['cpf'])
        {
            $objCad ->cadastraUnicoCliente($nome, $cpf, $idade, $email, $celular);

            $objUpdate->alterarCadastroCpf($nome, $idade, $email, $celular, $cpf, $arrayInfo['cpf']);

            header("location: ListagemClientes.php");
        } else
        {
           
           $objUpdate->alterarCadastro($nome, $idade, $email, $celular, $id);
           header("location: ListagemClientes.php");
        

        }
        
       
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of celular
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     */
    public function setCelular($celular): self
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}

