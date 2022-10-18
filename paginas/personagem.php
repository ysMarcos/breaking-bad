<?php
    $id = $param[1] ?? NULL;

    if(empty($id)){
        ?>
        <p>Coloque um id</p>
        <?php
    } else{

    $urlPersonagem = "https://www.breakingbadapi.com/api/characters/{$id}";
    $dados = file_get_contents($urlPersonagem);
    $dados = json_decode($dados);

    ?>
    <div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
      <img src='<?= $dados[0]->img ?>' class='img-fluid rounded-start w-100' style="height: 65vh;">        
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h1 class="card-title"><?= $dados[0]->name ?></h1>
          
          <h4 class="card-text"><small class="text-muted">Apelido:
            <strong><?= $dados[0]->nickname ?></strong> </small>
          </h4>

          <h4 class="card-text"><small class="text-muted">Aniversário:
            <strong><?= $dados[0]->birthday ?></strong> </small>
          </h4>

          <h4 class="card-text"><small class="text-muted">Status: 
            <strong><?= $dados[0]->status ?></strong> </small>
          </h4>

          <h4 class="card-text text-muted" > Occupation:
        <?php
          foreach($dados[0]->occupation as $data){
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
            <h4 class="card-text"><small class="text-muted">Apareceu em:
            <strong><?= $dados[0]->category ?></strong> </small>

            <h4 class="card-text text-muted" > Temporadas:
            <?php
                foreach($dados[0]->appearance as $data){
                    ?>
                    <small class="card-text">
                        <strong>
                            <?= $data ?>°,
                        </strong> 
                    </small>
                <?php
            }
            ?>
            <h4 class="card-text"><small class="text-muted">Frase: 
                <?php

                $nome =  str_replace(' ', '+', $dados[0]->name);
                $urlFrase = "https://www.breakingbadapi.com/api/quote?author={$nome}";
                $dadosFrase = file_get_contents($urlFrase);
                $dadosFrase = json_decode($dadosFrase);
                
                if( empty($dadosFrase[0]->quote)){
                    return null;
                }
                ?>
                <small><strong><?= $dadosFrase[0]->quote ?></strong></small>
            </h4>
            </h4>
          </h4>
        </div>
      </div>
    </div>
  </div>
        <?php
}    
?>