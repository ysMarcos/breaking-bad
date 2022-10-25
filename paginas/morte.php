<?php

    $urlMorte = "https://www.breakingbadapi.com/api/random-death";
    $dados = file_get_contents($urlMorte);
    $dados = json_decode($dados);

   
    
    ?>
    <div class="card centro-card" style="max-width: 100%;">
    <div class="row g-0 ">
      <div class="col-md-4 ">
      <img src='<?= $dados->img ?>' class='img-fluid rounded-start w-100' style="height: 65vh;">        
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h1 class="card-title"><?= $dados->death ?></h1>
          
          <h4 class="card-text"><small class="text-muted">Cause of death:
            <strong><?= $dados->cause ?></strong> </small>
          </h4>

          <h4 class="card-text"><small class="text-muted">Responsible: 
            <strong><?= $dados->responsible ?></strong> </small>
          </h4>

          <h4 class="card-text"><small class="text-muted">Last words: 
            <strong><?= $dados->last_words ?></strong> </small>
          </h4>
          <h4 class="card-text text-muted" > Occupation:
        <?php
          foreach($dados->occupation as $data){
            ?>
            <small class="card-text">
                </br>
                <strong>
                    <?= $data ?>
                </strong> 
            </small>
            <?php
        }
        ?>
            </h4>
        </div>
      </div>
    </div>
  </div>
    
    

