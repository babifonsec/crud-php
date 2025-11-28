<?php 

    //config
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "db_clickbus";

    // Criação da conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
      //echo "erro";
        die("Conexão falhou: " . $conn->connect_error);
    } else {
      // echo "deu certooo";
    }

?>
