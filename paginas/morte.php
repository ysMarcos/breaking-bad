<?php
<<<<<<< HEAD
    $morteUrl = "https://www.breakingbadapi.com/api/random-death?limit=1&offset=1";
    $dados = file_get_contents($morteUrl);
=======
    $url = "https://www.breakingbadapi.com/api/deaths";

    $dados = file_get_contents($url);
>>>>>>> b9f230f8439f62b6b05fbc5e96545d8a1067e70d
    $dados = json_decode($dados);

    foreach($dados as $morte){
        // resolver errro de array , ver como puxar as informaçoes da morte = kevin fazer
        ?>   
            <p  ><?= $morte ?></p>
            <img src="<?=  $morte ?>" alt="">
        <?php
    }
?>

