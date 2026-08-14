<?php
session_start(); // Inicia a sessão para usar $_SESSION

require_once "includes/banco.php";
require_once "includes/funcoes.php";
require_once "includes/login.php";

// Verifica se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    $usuario = 0;
} else {
    $usuario = $_SESSION['id_usuario'];
}

// Conexão com o banco (use apenas uma conexão)
$banco = new mysqli("127.0.0.1", "root", "", "bd_apolo");
if ($banco->connect_error) {
    die("Falha na conexão: " . $banco->connect_error);
}

// Consulta para pegar dados do usuário (se necessário)
if ($usuario != 0) {
    // Use prepared statements para segurança
    $stmt = $banco->prepare("SELECT nome, email, senha FROM usuario WHERE id_usuario = ?");
    $stmt->bind_param("i", $usuario);
    $stmt->execute();
    $resultUser  = $stmt->get_result();
    $usuarioDados = $resultUser ->fetch_assoc();
    $stmt->close();
} else {
    $usuarioDados = null;
}

// Consulta para pegar os outfits
$sql = "SELECT id_outfit, id_usuario, nomeOutfit, camisa, calca, tenis FROM outfit";
$result = $banco->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Outfits</title>
    <style>
        .item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        // Corrigido para usar o nome correto da coluna 'nomeOutfit'
        echo "<h2>" . htmlspecialchars($row['nomeOutfit']) . "</h2>";
        echo "<p>ID Outfit: " . htmlspecialchars($row['id_outfit']) . "</p>";
        echo "<p>ID Usuário: " . htmlspecialchars($row['id_usuario']) . "</p>";
        echo "<p>Camisa: " . htmlspecialchars($row['camisa']) . "</p>";
        echo "<p>Calça: " . htmlspecialchars($row['calca']) . "</p>";
        echo "<p>Tênis: " . htmlspecialchars($row['tenis']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhum item encontrado.</p>";
}

$banco->close();
?>

</body>
</html>