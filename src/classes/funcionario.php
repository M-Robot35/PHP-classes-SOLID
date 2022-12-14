<?php

class Funcionario extends Pessoa
{
    protected string $cargo;
    protected float $salario;

    function __construct(string $nome, int $idade, Endereco $endereco, string $cargo, float $salario)
    {
        parent:: __construct($nome, $idade, $endereco);
        $this->$cargo = $cargo;
        $this->salario = $salario;
    }

    // @ GET
    public function get_cargo():string {
        return $this->cargo;
    }

    public function get_salario():float {
        return $this->salario;
    }
    // @ SET
    public function set_cargo(string $cargo):void {
        $this->cargo;
    }

    public function set_salario(float $salario):void {
        $this->salario;
    }

    // @ METHODO ABSTRATO
    public function set_desconto(): void
    {
        $this->desconto = 0.10;
    }

    // @ SOBRESCREVER METHODO  POLIMORFISMO   
    public  function __toString():string
    {
        return "<p>Nome: " . $this->nome . 
                "Idade: " . $this->idade . " Anos" .

                "End: " . $this->endereco->get_Rua() . " , "   .
                // "Rua: " . $this->pessoa->get_Rua() . $this->endereco->get_Numero() .

                "Cargo: " . $this->cargo . 
                " Salario: " . $this->salario . "</p>";
    }
}




























