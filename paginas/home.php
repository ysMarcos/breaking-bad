<h1 class="text-center">
    Personagens
</h1>



<div class="row">
    <?php
        $urlPersonagem = "https://www.breakingbadapi.com/api/character/random?limit=8&offset=8";
        
        $dados = file_get_contents($urlPersonagem);
        $dados = json_decode($dados);
        foreach($dados as $personagem){
            $img = $personagem->img;
            ?>
            
                <div class="col-12 col-md-3">
                    <div class="card card-body text-center top-left">
                        <div class="image">
                            <img src="<?= $img ?>" class="w-100" style="height:40vh">
                        </div>
                        
                        
                        <a href="personagem/<?= $personagem->char_id ?>" class="botao-info btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2.033 16.01c.564-1.789 1.632-3.932 1.821-4.474.273-.787-.211-1.136-1.74.209l-.34-.64c1.744-1.897 5.335-2.326 4.113.613-.763 1.835-1.309 3.074-1.621 4.03-.455 1.393.694.828 1.819-.211.153.25.203.331.356.619-2.498 2.378-5.271 2.588-4.408-.146zm4.742-8.169c-.532.453-1.32.443-1.761-.022-.441-.465-.367-1.208.164-1.661.532-.453 1.32-.442 1.761.022.439.466.367 1.209-.164 1.661z"/></svg>
                        </a>

                    <div class="details">
                        <div class="center">
                                <p>
                                    <strong><?= $personagem->name ?></strong>               
                                </p>
                        </div>
                
                    </div>
                </div>
            </div>
            
            <?php
        }
    ?>
</div>