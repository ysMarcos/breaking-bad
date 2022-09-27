
        <?php
        $url = "https://www.breakingbadapi.com/api/character/random?limit=10&offset=10";

        $dados = file_get_contents($url);
        $dados = json_decode($dados);
        foreach($dados as $personagem){
            $img = $personagem->img;
            ?>
            <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="<?= $img ?>" class="w-100">
                        <div class="card-body text-center">
                            <p><strong><?= $personagem->name ?></strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
   
?>

