<?php
require __DIR__ ."/../lib/article.php"
?>
    
    
    <div class="col-md-4 my-2 d-flex">
      <div class="card ">
        <img src="./Asset/images/<?= $article["image"] ?>" class="card-img-top" alt="Php vs Python">
        <div class="card-body">
          <h5 class="card-title"><?= $article["title"] ?></h5>
          <a href="actu.php?id=<?= $key;?>" class="btn btn-primary">Lire la suite</a>
        </div>
      </div>
    </div>

