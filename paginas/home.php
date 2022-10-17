<h1 class="text-center">
    Personagens
</h1>



<div class="row">
    <?php
        $urlPersonagem = "https://www.breakingbadapi.com/api/character/random?limit=10&offset=10";
        
        $dados = file_get_contents($urlPersonagem);
        $dados = json_decode($dados);
        foreach($dados as $personagem){
            $img = $personagem->img;
            ?>
            <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="<?= $img ?>" class="w-100">
                        <div class="card-body text-center">
                            <p><strong><?= $personagem->name ?></strong></p>
                            <p><a href="personagem" >top</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
</div>