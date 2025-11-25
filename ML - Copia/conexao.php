<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sistema_consultas"; // coloque o nome exato do seu banco

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
