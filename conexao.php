<?php
    try{
        $hostname = "localhost";
        $dbname = "bdlogin";
        $username = "root";
        $pw = "";

        $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", "$username", "$pw");
    }catch (PDOException $e){
        echo "Erro de conexão". $e->getMessage()."\n";
        exit;
    }
/*
    $query = $pdo->prepare("select * from loginn");
    $query->execute();

    for ($i=0; $row = $query->fetch(); $i++){
        echo $i." - Tabela de Login <br/>";
        echo $i." - ".$row['id']." <br/>";
        echo $i." - ".$row['email']." <br/>";
        echo $i." - ".$row['senha']." <br/>";

    }

    unset($pdo);
    unset($query);
*/
?>