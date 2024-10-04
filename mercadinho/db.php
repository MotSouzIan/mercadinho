<?php
$servername = "localhost";
$username = "root"; // ou seu usuário
$password = ""; // sua senha
$dbname = "mercadinho"; // nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
