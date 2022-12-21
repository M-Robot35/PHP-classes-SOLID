<?php
    require_once "../components/header.php";    
?>

<h1>Cadastro de Clientes </h1>
<!--  NOME IDADE ENDEREÇO //  RUA NUMERO LAGAROURO UF -->
<!-- CLIENTE -->

<form class='cadastro' action="../ServiceSchema/Clientes.php" method="POST">
    <div>
        <label for="name">Nome completo: </label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade" min="0" max="120" maxlength="3" required>
    </div>

    <div>
        <label for="data">Data: </label>
        <input type="date" name="data" id="data" required>
    </div>

    <div>
        <label for="renda">Renda: </label>
        <input type="text" name="renda" id="renda" required>
    </div>


    <!-- ENDEREÇO USUARIO -->

    <div>
        <label for="rua">Rua: </label>
        <input type="text" name="rua" id="rua"  maxlength="255" required>
    </div>

    <div>
        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero" min="0"  required>
    </div>

    <div>
        <label for="lagradouro">Lagradouro: </label>
        <input type="text" name="lagradouro" id="lagradouro"  maxlength="255" required>
    </div>

    <div>
        <label for="uf">UF: </label>
        <input type="text" name="uf" id="uf" maxlength="2">
    </div>
    
    <div id="user-msg">
        <!-- MENSAGE USUARIO  ERROR -->
        <?php  
            if (!empty($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);                
            }        
        ?>
    </div>

    <div>
        <input type="submit" value="ENVIAR CADASTRO">
    </div>
</form>

<!-- FOOTER  -->
<?php
    require_once "../components/footer.php"
?>
