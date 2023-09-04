<?php
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php";

$error = false;
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$article = getArticleById($articles, $id);

	if (!$article) {
		$error = true;
	}
} else {
	$error = true;
}

if (!$error) {

?>

	<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
		<div class="col-10 col-sm-8 col-lg-6">
			<img src="./Asset/images/<?= $article["image"]; ?>" class="d-block mx-lg-auto img-fluid" alt="Default-image">
		</div>
		<div class="col-lg-6">
			<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $article["title"]; ?></h1>
			<p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
		</div>
	</div>
	</div>
<?php } else { ?>
	<h1>Article introuvable</h1>

<?php } ?>

<?php
require_once __DIR__ . "/templates/footer.php";
?>