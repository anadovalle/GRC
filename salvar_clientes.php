<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "VENDAS_DE_CARRO";
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

if($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    
    $sql = "INSERT INTO cliente (nome, email, telefone, endereco)
    VALUES ('$nome', '$email', '$telefone', '$endereco')";

    if($conn->query(query: $sql) == TRUE){
        header('Location: formulario.html');
    } else{
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>