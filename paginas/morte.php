<?php

    $morteUrl = "https://www.breakingbadapi.com/api/random-death?limit=1&offset=1";
    $dados = file_get_contents($morteUrl);
    $dados = json_decode($dados);

    foreach($dados as $morte){
        // resolver errro de array , ver como puxar as informaçoes da morte = kevin fazer
        ?>   
            <p  ><?= $morte ?></p>
            <img src="<?=  $morte ?>" alt="">
        <?php
    }
?>

