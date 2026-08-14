<?php
 session_start(); 
 if (!isset($_SESSION['id_usuario'])) {
    $usuario = 0;
 }
 else {
    $usuario = $_SESSION['id_usuario'];
    $nome  = $_SESSION['nome'] ;
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <title>Apolo - Home</title>
</head>
<body>
    <nav>
        <a href="home.php" title="Apolo" class="tituloNav"><h1>Apolo</h1></a>
        <ul>
            <li><a href="home.php" style="text-decoration: underline;" title="Home">Home</a></li>
            <li><a href="#" title="Closet">Closet</a>
                    <ul class="dropCloset">
                    <?php if ($usuario != 0 && $usuario != null) { ?>
                        <li><a href="closet.php">Closet</a></li>
                    <?php } else{ ?>
                        <li><a href="login.php">Closet</a></li>
                    <?php } ?>
                    <?php if ($usuario != 0 && $usuario != null){ ?>
                        <li><a href="criar.php">Criar</a></li>
                    <?php } else{ ?>
                    <li><a href="login.php">Criar</a></li>
                    <?php } ?>
                    </ul>
            </li>
            <?php if ($usuario != 0 && $usuario != null) { ?>
                <li><a href="perfil.php"><img src="img/user.png" alt="user" title="Perfil"></a></li>
            <?php } else { ?>
                <li><a href="login.php" title="Home">Entrar</a></li>
            <?php }?>
        </ul>
    </nav>

    <div class="cabecalho">
        <div class="titulo">
        <h2>Bem-vindo</h2> <?php if ($usuario != 0 && $usuario != null) {
            echo"<p class='Pnome'>$nome</p>";
             } ?>
        <h3>ao</h3>
         <h1>Apolo</h1>
        </div>
        <video autoplay loop muted>
            <source src="img/video1.mp4" type="video/mp4">
        </video>
    </div>


    <div class="trasicao"> </div>

    <div class="main2">

            <div class="textoTitulo">
                <h1>SEJA CRIATIVO</h1>
                <h2>Crie seu outfit da maneira que quiser do jeito que quiser</h2>
            </div>
            <div class="buttom">
                <input type="submit" value="Tente você mesmo" id="submit">
                <?php if ($usuario != 0 && $usuario != null){ ?>
                        <script>document.getElementById('submit').addEventListener('click', function() {
                            window.location.href = 'criar.php'; });</script>
                        
                <?php } else{ ?>
                       <script>document.getElementById('submit').addEventListener('click', function() {
                            window.location.href = 'login.php'; });</script>
                       
                    <?php } ?>
            </div>
        
    </div>
    <footer>
        <p>Deivison Miranda Gomes</p>
        <p>Gabriel Vassalo Souza</p>
        <p>Julio Cesar de Lima Dos Santos</p>
        <p>Eduardo Donizete de Oliveira</p>
    </footer>
    
</body>
</html>