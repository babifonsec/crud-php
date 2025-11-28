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

        <!-- Cadastro -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Cadastro de Ônibus</h4>
            </div>
            <div class="card-body">
                <form action="cadastro.php" method="POST">
                    <div class="form-group">
                        <label for="placa">Placa</label>
                        <input type="text" class="form-control" id="placa"  name="placa" placeholder="Digite a placa">
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite o modelo">
                    </div>
                    <div class="form-group">
                        <label for="capacidade">Capacidade</label>
                        <input type="text" class="form-control" id="capacidade" name="capacidade" placeholder="Digite a capacidade">
                    </div>
                    <div class="form-group">
                        <label for="idViacao">ID da Viação</label>
                        <input type="text" class="form-control" id="idViacao" name="idViacao" placeholder="Digite o idViacao">
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
