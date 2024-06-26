<?php 
	include 'header.php';

?>








<body>
	<h1>Liste des disques</h1>
	<a href="add_form.php">Ajouter un disque</a>
	<table>
		<thead>
			<tr>
				<th>Titre</th>
				<th>Artiste</th>
				<th>Année</th>
				<th>Genre</th>
				<th>Label</th>
				<th>Prix</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($disques as $disque) : ?>
				<tr>
					<td><?= $disque['title'] ?></td>
					<td><?= $disque['artist'] ?></td>
					<td><?= $disque['year'] ?></td>
					<td><?= $disque['genre'] ?></td>
					<td><?= $disque['label'] ?></td>
					<td><?= $disque['price'] ?></td>
					<td>
						<a href="details.php?disc_id=<?= $disque['disc_id'] ?>">Détails</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>