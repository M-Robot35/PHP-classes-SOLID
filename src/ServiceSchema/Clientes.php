<?php

use cliente as GlobalCliente;

// require_once "../Bd_connect/connect.php";


class Cliente extends ConnexaoBdPlus
{   

    function __construct()
    {
        
    }

    static function criarTabela()
    {
        // $query= "
        //     CREATE TABLE IF NOT EXISTS aluno(id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(200),  sobrenome VARCHAR(200),  titulo VARCHAR(200));
        // ";

    }
}




$tenso = Cliente::criarTabela();

















