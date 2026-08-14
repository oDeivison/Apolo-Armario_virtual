<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Apolo - Login</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
</head>
<body>

    <nav>
        <a href="home.php"><h1>Apolo</h1></a>
    </nav>

    <main>
        
            <div class="cabecalho">
                <div class="titulo">
                <h2>Bem-vindo ao</h2>
                <h1>Apolo</h1>
                </div>
            </div>

            <div class="login">
                <form action="userLogin.php" id="form"  method="post">
                    <label for="iemail">EMAIL</label><br>
                    <input type="email" id="iemail" name="email" placeholder="EX.EMAIL01@GMAIL.COM" pattern=".*@.*" required title="E-mail"><br>
                    <label for="isenha">SENHA</label><br>
                    <input type="password" id="isenha" name="senha" placeholder="EX.SENHA123" required title="Senha"><br>          
                    <input type="submit" value="ENTRAR" id="submit" title="Entrar">

                    <p>Não tem contra crie <a href="cadastro.php">aqui</a>.</p>
                </form>
            
        </div>

   
    </main>

     <footer>
        <p>Deivison Miranda Gomes</p>
        <p>Gabriel Vassalo Souza</p>
        <p>Julio Cesar de Lima Dos Santos</p>
        <p>Eduardo Donizete de Oliveira</p>
    </footer>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>