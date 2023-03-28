<?php
require_once "../vendor/autoload.php";

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email');




Class NovoEstacionamento{
    private $nome;
    
    private $idade;

    private $cpf;

    private $email;

    private $celular;

    private $modelo;

    private $placa;

    function __construct()
    {
        $this->nome = filter_input(INPUT_POST, 'nome');
        $this->cpf = filter_input(INPUT_POST, 'cpf');
        $this->idade = filter_input(INPUT_POST, 'idade');        
        $this->email = filter_input(INPUT_POST, 'email');
        $this->celular = filter_input(INPUT_POST, 'celular');
        $this->modelo = filter_input(INPUT_POST, 'modelo');
        $this->placa = filter_input(INPUT_POST, 'placa');

    }


    /**
     * Get the value of placa
     */ 
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set the value of placa
     *
     * @return  self
     */ 
    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

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
     *
     * @return  self
     */ 
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
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

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
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
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of placa
     */
    public function inserirDado(){
        $inserção = new Cadastrarcliente;
        $inserção->cadastraCliente(
            $this->nome,            
            $this->cpf,
            $this->idade,
            $this->email,
            $this->celular,
            $this->modelo,
            $this->placa
        );
    }
}

$inserir = new NovoEstacionamento;
$inserir->inserirDado();

