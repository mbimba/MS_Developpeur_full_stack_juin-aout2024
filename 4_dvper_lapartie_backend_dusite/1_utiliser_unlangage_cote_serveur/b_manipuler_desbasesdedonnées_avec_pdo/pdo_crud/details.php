<?php
require_once('fonctions.php');

$disc_id = $_GET['disc_id'];
$disque = getDisque($disc_id);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Détails du disque</title>
</head>
<body>
	<h1>Détails du disque</h1>
	<p>Titre: <?= $disque['title']?></p>
	<p>Artiste: <?= $disque['artist']?></p>
	<p>Année: <?= $disque['year']?></p>
	<p>Genre: <?= $disque['genre']?></p>
	<p>Label: <?= $disque['label']?></p>
	<p>Prix: <?= $disque['price']?></p>
	<p>Image: <img src="<?= $disque['picture']?>" alt="Image du disque"></p>
	<a href="update_form.php?disc_id=<?= $disc_id?>">Modifier</a>
	<a href="delete_script.php?disc_id=<?= $disc_id?>">Supprimer</a>
	<a href="index.php">Retour</a>
</body>
</html>