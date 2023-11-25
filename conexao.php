<?php
$servername = "";
$username = "";
$password = "";
$database = "";

$conexao = mysqli_connect($servername, $username, $password, $database);
if($conexao->error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->error);
}
?>
