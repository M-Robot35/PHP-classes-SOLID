<?php

$root='localhost';
$user='root';
$pass='';
$db_name='pessoa';
$port='3306';

$conn = new PDO("mysql:root=$root;dbname=". $db_name, $user , $pass);

// $query = "
//     INSERT INTO cadastro(nome, password, criacao) VALUES(:nome, :password, NOW());
// ";

// $usuario = $conn->prepare($query);
// $usuario->bindParam(":nome", $nome);
// $usuario->bindParam(":password", $password);
// $usuario->execute();


// $query= "
//     CREATE TABLE IF NOT EXISTS aluno(id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(200),  sobrenome VARCHAR(200),  titulo VARCHAR(200));
// ";

// $usuario = $conn->prepare($query);
// $usuario->execute();
























