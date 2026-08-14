<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cadastro.css">
    <title>Apolo - Cadastro</title>
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    
</head>
<body>
    <nav>
        <a href="home.php"><h1>Apolo</h1></a>
    </nav>
        <header>
            <h1>Criar Conta</h1>
        </header>

        <div class="cadastro">
            <form action="userCadastro.php" id="form" method="post">
                <label for="inome">NOME</label><br>
                <input type="text" id="inome" name="nome" placeholder="Neymar da Silva Santos Junior" required title="Nome"><br>
                 
                <label for="iemail">EMAIL</label><br>
                <input type="email" id="iemail" name="email" placeholder="EX.EMAIL01@GMAIL.COM" required title="O campo deve conter um '@' "><br>
                
                <label for="isenha">SENHA</label><br>
                <input type="password" id="isenha" name="senha" placeholder="EX.SENHA123" required title="Senha"><br>

                <label for="isenha2">CONFIRMAR SENHA</label><br>
                <input type="password" id="isenha" name="senha2" placeholder="EX.SENHA123" required title="Confirmar Senha"><br>
                
                <input type="submit" value="ENTRAR" name="Entrar" id="submit">

                <p>Possui conta <a href="login.php">entrar</a>.</p>
            </form>
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