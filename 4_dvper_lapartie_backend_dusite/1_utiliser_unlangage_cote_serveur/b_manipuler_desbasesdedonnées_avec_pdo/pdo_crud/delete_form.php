<?php
require_once('fonctions.php');

$disc_id = $_GET['disc_id'];
$disque = getDisque($disc_id);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Supprimer le disque</title>
</head>
<body>
	<h1>Supprimer le disque</h1>
	<p>Êtes-vous sûr de vouloir supprimer le disque suivant ?</p>
	<p>Titre: <?= $disque['title']?></p>
	<p>Artiste: <?= $disque['artist']?></p>
	<p>Année: <?= $disque['year']?></p>
	<p>Genre: <?= $disque['genre']?></p>
	<p>Label: <?= $disque['label']?></p>
	<p>Prix: <?= $disque['price']?></p>
	<p>Image: <img src="<?= $disque['picture']?>" alt="Image du disque"></p>
	<form action="delete_script.php" method="post">
		<input type="hidden" name="disc_id" value="<?= $disc_id?>">
		<button type="submit">Supprimer</button>
	</form>
	<a href="index.php">Retour</a>
</body>
</html>