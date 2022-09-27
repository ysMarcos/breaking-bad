<?php
    include '../config.php';
?>
        <?php
        $url = "https://www.breakingbadapi.com/api/random-death";

        $dados = file_get_contents($url);
        $dados = json_decode($dados);
        foreach($dados as $personagem){

            ?>   
                <p><strong><?= $personagem ?></strong></p>
            <?php
        }
   
?>

