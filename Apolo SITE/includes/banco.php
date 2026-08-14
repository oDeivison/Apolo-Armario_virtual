<?php
    $banco = new mysqli("127.0.0.1", "root", "", "bd_apolo");
    
    if ($banco->connect_error){
        echo "<p>Encontrei um erro $banco->connect_error</p>";
        die();
    }


    $banco->query("SET NAMES 'utf8'");
    $banco->query("SET character_set_connection=utf8");
    $banco->query("SET character_set_client=utf8");
    $banco->query("SET character_set_results=utf8");
?>