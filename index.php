<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quebrando ruim API</title>
    <base href="http://localhost/breaking-bad/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Personagens
                </a>
                <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">Todos</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Por Categoria</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Personagem Aleatorio</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Por Nome</a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <main>
        <?php
            $pagina = "home";

            if(isset($_GET["param"])){
                $param = trim($_GET["param"]);
                $param = explode("/", $param);

                $pagina = $param[0];
            }

            $pagina = "paginas/{$pagina}.php";

            if(file_exists($pagina)){
                include $pagina;
            } else{
                include "paginas/erro.php";
            }
        ?>
    </main>
</body>
</html>