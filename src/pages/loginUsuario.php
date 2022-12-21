<?php
    require_once "../components/header.php"; 
    require_once "../components/checkSession.php";
    
?>

<h1 id="aviso-logado" style="background-color: green;color:white;padding:10px;">ÁREA PARA ÚSUARIOS LOGADOS</h1>
<section id="content-total-user">
    <div>
        <h2>Parabéns Sr(a):  <span><?php echo $_SESSION['nome'];?></span></h2>
        <hr>
    </div>

    <div>
        <h2>Você: <span><?php echo $_SESSION['idade'];?> Anos</span></h2>
        <hr>
    </div>
    
    <div>        
        <h2>Você mora na rua: <span><?php echo $_SESSION['rua'];?></span></h2>
        <hr>
    </div>
</section>

<hr>
<?php echo $_SESSION['log'];?>

<!-- REDIRECT LOGOUT -->
<?php 
    echo " <a href='../pages/logoutUser.php'>Sair</a>";
?>

<!-- FOOTER -->
<?php
    require_once "../components/footer.php"
?>