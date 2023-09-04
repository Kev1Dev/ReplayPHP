<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/article.php";
?>

<h1>TechTrends Actualité</h1>

<div class="row text-center">
  <?php foreach ($articles as $key => $article) { ?>
    <?php  require __DIR__ . "/templates/article.part.php";?>
    <?php  }  ?>

</div>

  <?php
require_once __DIR__ . "/templates/footer.php";
  ?>