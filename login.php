<?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if (($login == 'adm') && ($senha == '1234')){
        
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: area-restrita/index-restrita.php");
    }
    else{
        
        header("Location: area-restrita/error.php");
        
    }

?>