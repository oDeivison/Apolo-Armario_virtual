<?php
    session_start();

    if(!isset($_SESSION['user'])) {
        $_SESSION['user']="";
        $_SESSION['nome']="";
    }

    function logout() {
        unset($_SESSION['user']);
        unset($_SESSION['nome']);
    }

    function is_logado() {
        if (empty($_SESSION['user'])) {
            return false;
        } else {
            return true;
        }
    }
?>