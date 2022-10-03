<?php
    // resolver errro de array , ver como puxar as informaçoes da morte = kevin fazer
    // $urlMorte = "https://www.breakingbadapi.com/api/deaths";
    $urlMorte = "https://www.breakingbadapi.com/api/random-death?limit=2&offset=1";
    $dados = file_get_contents($urlMorte);
    $dados = json_decode($dados);

    // $morteRandon = array_rand($dados, 1);
    
    echo"$dados->death";
    echo "<img src='$dados->img'>";
    

    
    
?>

