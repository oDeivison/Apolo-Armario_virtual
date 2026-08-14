<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Apolo - Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos/estilo.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <style>
            div#corpo {
                width: 270px;
                font-size: 15pt;
            }

            td {
                padding: 6px;
            }
        </style>
    </head>
    <body>
        <?php
           require_once "includes/banco.php";
           require_once "includes/funcoes.php";
           require_once "includes/login.php";
        ?>
        <div id="corpo">
        <?php
            $e = $_POST['email'] ?? null;
            $s = $_POST['senha'] ?? null;

            if (is_null($e) || is_null($s)) {
                require "userLogin_form.php"; 
            } else {                  
                $q = "select id_usuario, senha, email, nome from usuario where email= '$e' limit 1";
                $busca = $banco->query($q);
                
                if (!$busca) {
                    echo msg_erro('Falha ao acessar o banco!');
                } else {
                    if ($busca->num_rows>0) {
                        $reg = $busca->fetch_object();

                        if ($reg->senha == $s) {    

                            $_SESSION['nome'] = $reg->nome;
                            $_SESSION['id_usuario'] = $reg->id_usuario;
                            header("Location: home.php");
                            echo msg_sucesso('Logado com sucesso'); 
                            exit();

                        } else {
                            echo "<script>alert('Senha incorreta!'); window.location.replace('login.php');</script>";
                        } 
                    } else {
                        echo "<script>alert('Usuario não encontrado!'); window.location.replace('login.php');</script>";
                    }                       
                }  
            }
        ?>
        </div> 
    </body>
</html>