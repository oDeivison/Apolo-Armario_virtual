<?php

session_start();
   
session_unset();
session_destroy();  


header("Cache-Control:no-store,no-cache,must-revalidate,max-age=0");
header("Cache-control:post-check=0,pre-check=0",false);
header("Pragma:no-cache");


header("Location: home.php");

exit();
?>

<!-- session_start();
// Limpa todas as variáveis da sessão
$_SESSION = array();
// Apaga o cookie da sessão
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// Destrói a sessão
session_destroy();
// Envia headers para evitar cache
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// Redireciona para home.php
header("Location: home.php");
exit(); -->