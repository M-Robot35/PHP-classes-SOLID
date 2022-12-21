<?php

if (!isset($_SESSION['msg'])){
    header("Location: ../pages/logoutUser.php");
    die("Área Apenas para Usuarios Vips");
}
