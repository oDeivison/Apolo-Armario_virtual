<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Apolo - Novo Usuário</title>
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
                    $email = $_POST['email'] ?? null;
                    $nome = $_POST['nome'] ?? null;
                    $senha1 = $_POST['senha'] ?? null;
                    $senha2 = $_POST['senha2'] ?? null;

                    if ($senha1 == $senha2) {
                        if (empty($email) || empty($nome) || empty($senha1) || empty($senha2)) { 
                           echo "<script> alert('Todos os Campos são obrigatorio!'); </script>";
                            }
                        else {                        
                            $q = "INSERT INTO usuario(email,nome,senha) VALUES ('$email','$nome','$senha1')";
                            
                            if ($banco->query($q)) {
                                $id_usuario = $banco->insert_id;
                                $_SESSION['id_usuario'] = $id_usuario;
                                $_SESSION['user_name'] = $nome;
                                echo "<script>  window.location.href = 'home.php'; </script>";
                                
                                
                            } else {
                                echo msg_erro("Não foi possivel criar o usuário $nome");
                            }
                        }
                    } else {
                        echo "<script> alert('As senhas não se coincidem!'); window.location.href = 'cadastro.php'; </script>";
                    }
                
        ?>
        </div> 
    </body>
</html>