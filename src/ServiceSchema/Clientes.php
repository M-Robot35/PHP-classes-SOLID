<?php
session_start();

$nome = $_POST["name"];
$idade = $_POST["idade"];
$data = $_POST["data"];
$renda = $_POST["renda"];

$rua = $_POST["rua"];
$numero = $_POST["numero"];
$lagradouro = $_POST["lagradouro"];
$uf = $_POST["uf"];

if (!empty($nome) and !empty($idade) and !empty($data) and !empty($renda) and !empty($rua) and !empty($numero) and !empty($lagradouro) and !empty($uf))
{   
    require_once "./midwareCliente.php";

    $_SESSION['msg']= "logado";
    $_SESSION['nome']= $nome;
    $_SESSION['idade']= $idade;
    $_SESSION['rua']= $rua;
    $_SESSION['log']= "<h3 style='background:greem;border:1px solid black'>USUARIO LOGADO: ".$_SESSION['nome']."</h3>";

    header("Location: ../pages/loginUsuario.php");
    echo "<h1>TODOS CAMPOS SELECIONADOS</h1>";
    die("<h1>ON</h1>");
}else{

    $_SESSION['msg']= "<h3 style='background:red;border:1px solid black'>PREENCHA TODOS OS CAMPOS</h3>";

    header("Location: ../pages/cad_usuario.php");
    die("<h1>OFF</h1>");
}

