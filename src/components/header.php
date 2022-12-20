<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index_style.css">
    <title>Pagina Inicial | Thiago Teles</title>
</head>
<style>
    body{
        border: 1px solid black;
        position: relative;
    }

    .header-total {
        position: absolute;
        top: 0;       
    }
</style>
    
<body>
    

<section class="header-total">
    
    <section class="conteiner-menu">
        <nav>
            <ul>
                <div>
                    <?php 
                        if (isset($_SESSION['msg']))
                        {
                            echo '<span id="cad-user">ÁREA VIP ONLINE</span>';
                        }else{
                            echo '<li id="cad-user"><a href="../pages/cad_usuario.php">Cadastro Cliente</a></li>';
                            echo '<li id="cad-func"><a href="../pages/cad_funcionario.php">Cadastro Funcionario</a></li>';
                        }
                    ?>
                </div>

                <div>
                    <li><?php 
                        if (isset($_SESSION['msg']))
                        {
                            echo "Olá " . $_SESSION['nome'];
                            echo '<li><a href="../pages/logoutUser.php">Logout</a></li>';
                        }else{
                            echo "Faça Log in";
                        }
                    ?>
                    </li>
                </div>
            </ul>
        </nav>
    </section>
</section>
    
