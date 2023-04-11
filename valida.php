<?php
session_start();

include("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$query = $pdo->prepare('SELECT * 
                        FROM login 
                        WHERE email = :email 
                        AND senha = :senha');
                      
$query->execute(array(
  ':email' =>  $email,
  ':senha' =>  $senha
));

if ($query->rowCount() <> 0) {
    header("Location: home.php");

    } else {
      $_SESSION['msg'] = "Usuário e senha incorretos.";
      header("Location: index.php");
     
    }
?>