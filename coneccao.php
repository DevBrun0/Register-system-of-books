<?php

$host = "localhost";   #Nome do host

$user = "root"; #Nome do usuário

$pass = "";   #Senha do usuário

$dbname = "quicken_venda_de_livros";


try{
 
    $conn = new PDO("mysql:dbname=$dbname;host=" . $host, $user, $pass);

    echo 'conexão com banco de dados realizado com sucesso';
}catch(PDOException $err){
    echo "Erro: conexão com banco de dados não foi realizada com sucesso. Erro gerado" . $err->getMessage();
}

?>