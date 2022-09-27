<?php
    $url = "https://www.breakingbadapi.com/api/deaths";

    $dados = file_get_contents($url);
    $dados = json_decode($dados);
    foreach($dados as $morte){
        ?>   
            <p><strong><?= $morte->death ?></strong></p>
        <?php
    }
?>

