<?php
session_start();
require_once "../Bd_connect/connect.php";

echo "<h1>PAGINA MIDWERE FUNCIONARIO</h1>";

$queryCreateFuncionario= [
    "id INT PRIMARY KEY AUTO_INCREMENT",
    "nome VARCHAR(255) NOT NULL",
    "idade INT ",
    "cargo VARCHAR(255) NOT NULL",
    "salario FLOAT NOT NULL",    
    "rua VARCHAR(255) NOT NULL",
    "numero VARCHAR(255) NOT NULL",
    "lagradouro VARCHAR(255) NOT NULL",
    "uf VARCHAR(2) NOT NULL",        
];

$funcionarioCreate= new ConnexaoBdPlus("funcionario", $queryCreateFuncionario);
$funcionarioCreate->createTable();

$nome = $_POST["name"];
$idade = $_POST["idade"];
$cargo = $_POST["cargo"];
$renda = $_POST["renda"];

$rua = $_POST["rua"];
$numero = $_POST["numero"];
$lagradouro = $_POST["lagradouro"];
$uf = $_POST["uf"];

$insertFuncionario= array(
            "nome"=> strtolower($nome),
            "idade"=> $idade,
            "cargo"=> strtolower($cargo),
            "salario"=> $salario,
            "rua"=> strtolower($rua),
            "numero"=> $numero,
            "lagradouro"=> strtolower($lagradouro),
            "uf"=> strtolower($uf),
        );
        
$funcionarioInsertTable= new ConnexaoBdPlus("funcionario", $insertFuncionario);
$funcionarioInsertTable->insertInto();



