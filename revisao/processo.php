<?php
include("conexao.php");

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$data_nasc=$_POST['data_nasc'];

$senha_criptografada= md5($senha);

$sql = "INSERT INTO mario(nome,cpf,email, data_nasc, senha) VALUES ('$nome','$cpf', '$email','$data_nasc', '$senha_criptografada')"; 

if(mysqli_query($conn, $sql)){
    return true;
}
else{
    return false;
}
?>