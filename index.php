<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quebrando ruim API</title>
    <!-- local host do marcos -->
    <!-- <base href="http://localhost/breaking-bad/"> -->
    <!-- local host do kevin -->
    <base href="http://localhost:81/faculdade/breaking-bad/breaking-bad/"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>
<body>
    
        <nav class=" navbar navbar-expand-lg bg-light img-header">
        <div class="  container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" class="w-100" style="height: 100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="text-white nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">  
                        <a class="text-white nav-link" href="morte">Mortes</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    <main class="all-font container">
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