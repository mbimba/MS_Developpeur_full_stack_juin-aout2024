<?php
require_once('fonctions.php');
$artistes = getArtistes();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un disque</title>
</head>
<body>
	<h1>Ajouter un disque</h1>
	<form action="add_script.php" method="post" enctype="multipart/form-data">
		<label for="title">Titre:</label>
		<input type="text" id="title" name="title" required><br>

		<label for="artist">Artiste:</label>
		<select id="artist" name="artist" required>
			<?php foreach ($artistes as $artiste) : ?>
				<option value="<?= $artiste['artist_id'] ?>"><?= $artiste['name'] ?></option>
			<?php endforeach; ?>
		</select><br>

		<label for="year">Année:</label>
		<input type="number" id="year" name="year" required><br>

		<label for="genre">Genre:</label>
		<input type="text" id="genre" name="genre" required><br>

		<label for="label">Label:</label>
		<input type="text" id="label" name="label" required><br>

		<label for="price">Prix:</label>
		<input type="number" id="price" name="price" required><br>

		<label for="picture">Image:</label>
		<input type="file" id="picture" name="picture"><br>

		<button type="submit">Ajouter</button>
	</form>
	<a href="index.php">Retour</a>
</body>
</html>