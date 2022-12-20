<?php
    // require "./cad_usuario.php";

    if (empty($_SESSION['msg'])){   
        unset($_SESSION['msg']);
        session_destroy();
        header("Location: ./cad_usuario.php");
        die("LOGOUT") ;       
    }
    else{
        unset($_SESSION['msg']);
        session_destroy();
        header("Location: ./cad_usuario.php");
        die("LOGOUT") ;
    } 
?>