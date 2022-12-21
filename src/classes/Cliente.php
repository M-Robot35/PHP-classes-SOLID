<?php

class cliente extends Pessoa
{
    private string $data_nascimento;
    private float $renda;

    function __construct(string $nome, int $idade, Endereco $endereco, string $data, float $renda)
    {
        parent::__construct($nome, $idade, $endereco);
        
        $this->data_nascimento = $data;
        $this->renda           = $renda;
    }

    // @ GET
    public function get_dataNascimento():string{
        return $this->data_nascimento;
    }

    public function get_renda():float{
        return $this->renda;
    }

    // @ SET
    public function set_dataNascimento(string $data_nascimento):void
    {
        $this->data_nascimento = $data_nascimento;
    }

    public function set_renda(float $renda):void
    {
        $this->renda = $renda;
    }

    // VALIDATIONS

    // METHODO ABSTRATO DESCONTO CLIENTES
    public function set_desconto():void
    {
        $this->desconto = 0.05;
    }

    // SOBRESCREVER METHODO
    public  function __toString():string
    {
        return "<p>Nome: " . $this->nome . 
                "Idade: " . $this->idade . "Anos" .
                "End: " . $this->endereco->get_Lagradouro() . " , " .
                "Rua: " . $this->endereco->get_Rua() .$this->endereco->get_Numero() .
                "Data Nascimento: " . $this->get_dataNascimento() . 
                "Salario: " . $this->renda . "</p>";
    }
}

