<!-- LISTE -->

<?php include 'header2.php'; ?>
<h2> Record: Liste </h2>
<a href="add2_form.php">Ajouter un disque</a>

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
            echo '<a href="details2.php?disc_id=' . $row['disc_id'] . '">Détails</a>';
            echo '</td>';
            echo '</tr>';
        }
       
        ?>

		</tbody>
	</table>



    <?php include 'footer2.php'; ?>