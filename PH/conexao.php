<?php 
$server = "localhost:3307";
$user = "root";
$password = "root";
$database = "php";
$port= 3307;


$conn = new mysqli($server, $user,$password,$database, $port);


if($conn->connect_error){
    die("erro na conexao com o banco de dados" . $conn->connect_error);
}else{
    echo("conectado com sucesso");
}
?>