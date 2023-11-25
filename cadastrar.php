<?php
session_start();
include('conexao.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obter os dados do formulário
  $username = $_POST['username'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO TB_USUARIO (USERNAME, EMAIL_USUARIO, SENHA_USUARIO) VALUES ('$username', '$email', '$senha')";

if ($conexao->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conexao->error;
}

header("Location: home.html");
}
?>