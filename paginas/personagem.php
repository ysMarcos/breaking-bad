<?php
    $id = $param[1] ?? NULL;

    if(empty($id)){
        ?>
        <p class="alert alert-danger text-center">
            Personagem Inválido!
        </p>
        <?php
    } else{
        $url = "https://www.breakingbadapi.com/api/characters/{$id}";

        $dados = file_get_contents($url);
        $dados = json_decode($dados);
        $img = IMGS.$dados->img;
        ?>
        <div class="card">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="<?=$poster?>" alt="<?=$dados->title ?>" class="w-100">
                </div>
                <div class="col-12 col-md-9">
                    <h1><?= $dados->title ?></h1>
                    <p><?= $dados->overview ?></p>
                </div>
            </div>
        </div>
        <?php
    }
?>