<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
			<!-- Le e fait un retraitement du title, pour éviter toute tentative d'intrusion -->
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<?= $this->section('footer') ?>
		</footer>
	</div>
</body>
</html>