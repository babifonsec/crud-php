<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>CRUD</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card mb-4 shadow-sm">
            
        <?php 
            include "conexao.php";

            $placa = $_POST['placa'];
            $modelo = $_POST['modelo'];
            $capacidade = $_POST['capacidade'];
            $idViacao = $_POST['idViacao'];

            $sql = "INSERT INTO Onibus (placa, modelo, capacidade, idViacao) 
            VALUES ('$placa', '$modelo', '$capacidade', '$idViacao')";

            if(mysqli_query($conn, $sql)){
                echo "Ônibus cadastrado com sucesso";
            } else {
                 echo "Erro ao cadastrar ônibus: " . mysqli_error($conn);
            }
            $conn->close();
        ?> 
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
