<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "registro_cidades";

    try {

        $conn = new PDO("mysql:host=".$host, $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "create DATABASE IF NOT EXISTS registro_cidades";
        $conn->exec($sql);
        $sql = "use registro_cidades";
        $conn->exec($sql);
        
    }
    catch (PDOException $e) {
        die("DB ERROR: " . $e->getMessage());
    }
?>