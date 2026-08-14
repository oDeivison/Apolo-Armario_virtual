<?php
 session_start(); 
 if (!isset($_SESSION['id_usuario'])) {
    $usuario = 0;
 }
 else {
    $usuario = $_SESSION['id_usuario'];
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Apolo - Criar</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos/estilo.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
           require_once "includes/banco.php";
           require_once "includes/funcoes.php";
           require_once "includes/login.php";
        ?>
        <div id="corpo">
        <?php 
            $id_outfit = $_POST['id_outfit'] ?? null;
            $outfit = $_POST['outfit'] ?? null;
            $urlCamisa = $_POST['urlCamisa'] ?? null;
            $urlCalca = $_POST['urlCalca'] ?? null;
            $urlTenis = $_POST['urlTenis'] ?? null;
            
                if (empty($outfit)) { 
                    echo "<script> alert('Nome obrigatorio!'); </script>";
                    }
                else {                        
                    $q = "INSERT INTO outfit ( id_usuario, nomeOutfit, camisa, calca, tenis) VALUES ('$usuario ','$outfit','$urlCamisa','$urlCalca','$urlTenis')"; 
                    
                    if($banco->query($q)){
                        echo "<script>  window.location.href = 'criar.php'; </script>";
                        
                    } 
                    else{
                        echo msg_erro("Não foi possivel criar o outfit $outfit");
                    }
                }
                    
                
        ?>
        
        </div> 
    </body>
</html>