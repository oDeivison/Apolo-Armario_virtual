<?php
require_once "includes/banco.php";
require_once "includes/funcoes.php";
require_once "includes/login.php";


if (!isset($_SESSION['id_usuario'])) {
    $usuario = 0;
} else {
    $usuario = $_SESSION['id_usuario'];
}

$sql = "SELECT id_outfit, id_usuario, nomeOutfit, camisa, calca, tenis FROM outfit";
$result = $banco->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style/closet.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <title>Apolo - Closet</title>
</head>
<body>
    <nav>
        <a href="home.php" title="Apolo"><h1>Apolo</h1></a>
        <ul>
            <li><a href="home.php" title="Home">Home</a></li>
            <li><a href="#" title="Closet" style="text-decoration: underline;">Closet</a>
                    <ul class="dropCloset">
                        <li><a href="closet.php">Closet</a></li>
                        <li><a href="criar.php">Criar</a></li>
                    </ul>
            </li>
            <li><a href="perfil.php"><img src="img/user.png" alt="user" title="Perfil"></a></li>
        </ul>
    </nav>
    <h1 class="TituloCloset">Closet</h1>  
<main>
    <div class="cards">
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {                   
                    if($usuario == $row['id_usuario']){ 

                       echo "<div class='card'>";
                            echo "<div class='cardP'>";
                                echo "<img src='" . htmlspecialchars($row['camisa']) . "' alt='Imagem' class='img150px'>";
                                echo "<img src='" . htmlspecialchars($row['calca']) . "' alt='Imagem' class='img150px'>";
                                echo "<img src='" . htmlspecialchars($row['tenis']) . "' alt='Imagem' class='img150px'>";
                                echo "<p class='cardTexto'>" . htmlspecialchars($row['nomeOutfit']) . "</p>";
                            echo "</div>";
                            echo "<form action='delete.php' method='post'>
                          
                            <input type='hidden' name='id_outfit' value= " . htmlspecialchars($row['id_outfit']) .">
                            <input type='submit' value='X' class='btnX'>
                            </form>";
                        echo "</div>";
                    }
                } 
                
            }
            
        ?>
    </div> 

</main>
     <footer>
        <p>Deivison Miranda Gomes</p>
        <p>Gabriel Vassalo Souza</p>
        <p>Julio Cesar de Lima Dos Santos</p>
        <p>Eduardo Donizete de Oliveira</p>
    </footer>
</body>
</html>
