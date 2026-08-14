<?php
    $banco = new mysqli("127.0.0.1", "root", "", "bd_apolo");
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
    require_once "includes/login.php";
    if (!isset($_SESSION['id_usuario'])) {
        $usuario = 0;
     }
     else {
        $usuario = $_SESSION['id_usuario'];
     }
     $slct= "SELECT nome, email, senha from usuario where id_usuario='$usuario';";
     $result = mysqli_query($banco, $slct);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Apolo</title>
    <link rel="shortcut icon" href="img/Logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style/perfil.css" />
</head>
<body>
    <nav>
        <a href="home.php" title="Apolo"><h1>Apolo</h1></a>

        <!-- Botão Hamburger para menu responsivo -->
        <div class="menu-toggle" id="menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <ul id="menu">
            <li><a href="home.php" title="Home">Home</a></li>
            <li>
                <a href="#" title="Closet">Closet</a>
                <ul class="dropCloset">
                    <li><a href="closet.php">Closet</a></li>
                    <li><a href="criar.php">Criar</a></li>
                </ul>
            </li>
            <li><a href="perfil.php"><img src="img/user.png" alt="user" title="Perfil" /></a></li>
        </ul>
    </nav>

    <center>
        <?php
        if (!isset($_SESSION['id_usuario'])) {
        ?>
            <h1>Nao logado</h1>
        <?php
        } else {
        ?>
            <div class="perfil">
                <div class="user">
                    <img src="img/user.png" alt="" />
                </div>

                <form action="perfil.php" id="form">
                    <p>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($dados = mysqli_fetch_object($result)) { ?>
                                <label for="inome">NOME  </label>
                                <input type="text" id="inome" <?php echo " value='$dados->nome' " ?> readonly title="Nome" />
                                <label for="iemail">EMAIL </label>
                                <input type="text" id="iemail" <?php echo " value='$dados->email' " ?> readonly title="Email" />
                        <?php }
                        }
                        ?>
                    </p>

                    <button class="Btn">
                        <div class="sign">
                            <svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg>
                        </div>
                        <a href="login.php" class="aSair">Sair</a>
                    </button>
                </form>
            </div>
        <?php
        }
        ?>

        <footer>
            <p>Deivison Miranda Gomes</p>
            <p>Gabriel Vassalo Souza</p>
            <p>Julio Cesar de Lima Dos Santos</p>
            <p>Eduardo Donizete de Oliveira</p>
        </footer>
    </center>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('show');
        });

        const closetLi = menu.querySelector('li:nth-child(2)'); 

        closetLi.addEventListener('click', (e) => {
            if(window.innerWidth <= 768){
                e.preventDefault();
                closetLi.classList.toggle('active');
            }
        });

        document.addEventListener('click', (e) => {
            if(window.innerWidth <= 768){
                if(!closetLi.contains(e.target) && closetLi.classList.contains('active')){
                    closetLi.classList.remove('active');
                }
            }
        });
    </script>
</body>
</html>
