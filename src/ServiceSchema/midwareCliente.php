<?php
session_start();
require_once "../Bd_connect/connect.php";

echo "<h1>PAGINA MIDWERE CLIENTE</h1>";

$queryCreateFuncionario= [
    "id INT PRIMARY KEY AUTO_INCREMENT",
    "nome VARCHAR(255) NOT NULL",
    "idade INT ",
    "data VARCHAR(255) NOT NULL",
    "renda FLOAT NOT NULL",    
    "rua VARCHAR(255) NOT NULL",
    "numero VARCHAR(255) NOT NULL",
    "lagradouro VARCHAR(255) NOT NULL",
    "uf VARCHAR(2) NOT NULL",        
];

$clienteCreate= new ConnexaoBdPlus("usuario", $queryCreateFuncionario);
$clienteCreate->createTable();

$nome = $_POST["name"];
$idade = $_POST["idade"];
$data = $_POST["data"];
$renda = $_POST["renda"];

$rua = $_POST["rua"];
$numero = $_POST["numero"];
$lagradouro = $_POST["lagradouro"];
$uf = $_POST["uf"];

$insertFuncionario= array(
            "nome"=> strtolower($nome),
            "idade"=> $idade,
            "data"=> $data,
            "renda"=> $renda,
            "rua"=> strtolower($rua),
            "numero"=> $numero,
            "lagradouro"=> strtolower($lagradouro),
            "uf"=> strtolower($uf),
        );
        
$clienteCreate= new ConnexaoBdPlus("usuario", $insertFuncionario);
$clienteCreate->insertInto();



