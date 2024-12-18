<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "VENDAS_DE_CARRO";
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

if($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$conn->close();
?>