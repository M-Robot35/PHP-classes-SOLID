<?php

class Endereco
{
    protected string $rua;
    protected int $numero;
    protected string $lagradouro;
    protected string $uf;
    
    
    function __construct(string $rua, int $numero, string $lagradouro, string $uf)
    {
        $this->$rua =         $rua;
        $this->$numero =      $numero;
        $this->$lagradouro =  $lagradouro;
        $this->$uf =          $uf;
        
    }

    // @GET
    public function get_Rua():string {
        return $this->rua;
    }

    public function get_Numero():int {
        return $this->numero;
    }

    public function get_Lagradouro():string {
        return $this->lagradouro;
    }

    public function get_Uf():string
    {
        return $this->uf;
    }

    // @SET
    public function set_Rua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function set_Numero(int $numero): void
    {
        $this->numero = $numero;
    }

    public function set_Lagradouro(string $lagradouro): void
    {
        $this->lagradouro = $lagradouro;
    }
    
    public function set_Uf(string $uf): void
    {
        $this->uf = $uf;
    }

    // VALIDAÇÕES









}