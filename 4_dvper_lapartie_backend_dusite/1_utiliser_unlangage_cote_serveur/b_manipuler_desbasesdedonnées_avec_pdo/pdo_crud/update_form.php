<?php
require_once('fonctions.php');

$disc_id = $_GET['disc_id'];
$disque = getDisque($disc_id);
$artistes = getArtistes();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier le disque</title>
</head>
<body>
	<h1>Modifier le disque</h1>
	<form action="update_script.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="disc_id" value="<?= $disc_id?>">
		<label for="title">Titre:</label>
		<input type="text" id="title" name="title" value="<?= $disque['title']?>" required><br>

		<label for="artist">Artiste:</label>
		<select id="artist" name="artist" required>
			<?php foreach ($artistes as $artiste) :?>
				<option value="<?= $artiste['artist_id']?>" <?= $artiste['artist_id'] == $disque['artist_id']? 'elected' : ''?>><?= $artiste['name']?></option>
			<?php endforeach;?>
		</select><br>

		<label for="year">Année:</label>
		<input type="number" id="year" name="year" value="<?= $disque['year']?>" required><br>

		<label for="genre">Genre:</label>
		<input type="text" id="genre" name="genre" value="<?= $disque['genre']?>" required><br>

		<label for="label">Label:</label>
		<input type="text" id="label" name="label" value="<?= $disque['label']?>" required><br>

		<label for="price">Prix:</label>
		<input type="number" id="price" name="price" value="<?= $disque['price']?>" required><br>

		<label for="picture">Image:</label>
		<input type="file" id="picture" name="picture"><br>

		<button type="submit">Modifier</button>
	</form>
	<a href="index.php">Retour</a>
</body>
</html>