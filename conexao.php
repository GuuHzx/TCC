<?php
$servername = "sql204.byethost31.com";
$username = "b31_35269143";
$password = "Panedrinh0";
$database = "b31_35269143_teste";

$conexao = mysqli_connect($servername, $username, $password, $database);
if($conexao->error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->error);
}
?>