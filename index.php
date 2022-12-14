<?php

require_once "./src/classes/Pessoa.php";
require_once "./src/classes/Cliente.php";
require_once "./src/classes/Endereco.php";
require_once "./src/classes/funcionario.php";

$endereco = new Endereco("Rua no fuxico", 99, "proximo farmacia", "MG");
$enderecoClient = new Endereco("Rua amor de nossa vida", 300, "Galeria do ouvidor", "MG");


$funcionario = new Funcionario("Thiago Teles", 31, $endereco,"Programador", 99999);

$cliente = new cliente('Fulano de Tal', 22, $enderecoClient, "22/10/2025", 10000);


echo "<pre>";
print_r($cliente);

echo "<br><br><br>";
print_r($funcionario);


echo "</pre>";















