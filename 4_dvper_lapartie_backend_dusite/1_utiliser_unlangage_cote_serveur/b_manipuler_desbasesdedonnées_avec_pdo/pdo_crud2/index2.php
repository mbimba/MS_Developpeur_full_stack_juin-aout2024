<!-- LISTE -->

<?php include 'header2.php'; ?>
<h2> Record: Liste </h2>
<button type="submit" class="btn btn-primary btn-sm flex-row-reverse" onclick="ajouterundisque()">Ajouter un disque</button>  <!--    "btn-sm": pour réduire la taille du bouton -->

<table  style='border: 10px solid #ccc; padding: 30px'>
		<thead>
			<tr>
                <th>ID_DISK</th>
				<th>Titre</th>
				<th>Artiste_ID</th>
				<th>Année</th>
                <th>Label</th>
				<th>Genre</th>
				<th>Prix</th>
				<th>Actions</th>
                <th>Image du disque</th>
			</tr>
		</thead>
		<tbody style='border: 10px solid #ccc; padding: 5px'>
        
    




        <form action='details2.php' method=GET >


        <?php 
        // Connect to the database
        $servername = "localhost";
        $username = "admin";
        $password = "Afpa1234";
        $dbname = "record";



        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //Query the database for all records
        $stmt = $pdo->query('SELECT * FROM disc');
           // Loop through each record and display it in a table row
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td >' . $row['disc_id'] . '</td>';
            echo '<td>' . $row['disc_title'] . '</td>';
            echo '<td>' . $row['artist_id'] . '</td>';
            echo '<td>' . $row['disc_year'] . '</td>';
            echo '<td>' . $row['disc_label'] . '</td>';
            echo '<td>' . $row['disc_genre'] . '</td>';
            echo '<td>' . $row['disc_price'] . '</td>';
            echo '<td>' . $row['disc_picture'] . '</td>';
            echo '<td> <img src="pictures/'.$row["disc_picture"].'" atl="nop" style="width: 100px;">';
            echo '<td> <button type="submit" name="id" value=' . $row['disc_id'] . '">Détails</button>';
            echo '</td>';
            echo '</tr>';
        }
       
        ?>

		</tbody>
	</table>



    <?php include 'footer2.php'; ?>