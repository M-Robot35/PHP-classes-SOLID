<?php
    require_once "../components/header.php";
?>

<h1>Cadastro de Funcionario </h1>

<!-- FUNCIONARIO -->

<form class='cadastro' action="../ServiceSchema/Funcionario.php" method="POST">
    <div>
        <label for="name">Nome completo: </label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade" min="0" max="120" maxlength="3" required>
    </div>

    <div>
        <label for="cargo">Cargo: </label>
        <input type="text" name="cargo" id="cargo" required>
    </div>    

    <div>
        <label for="salario">Salario: </label>
        <input type="text" name="salario" id="salario" required>
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
        <input type="text" name="uf" id="uf" maxlength="2"required>
    </div>

    <div>
        <input type="submit" class="btn-submit" value="ENVIAR CADASTRO">
    </div>
</form>
















<?php
    require_once "../components/footer.php"
?>






