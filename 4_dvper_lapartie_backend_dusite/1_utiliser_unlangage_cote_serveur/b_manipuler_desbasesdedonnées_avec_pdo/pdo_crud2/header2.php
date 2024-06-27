<!-- MON HEADER -->
<?php
$servername = "localhost";
        $username = "admin";
        $password = "Afpa1234";
        $dbname = "record";

        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //Query the database for all records
        $stmt = $pdo->query('SELECT * FROM artist');
           // Loop through each record and display it in a table row
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='" . $row['artist_id'] . "'>" . $row['name'] . "</option>";
            }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header: crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header>

<nav>
<ul>
    <li> <a href="index2.php">Index2</a> </li>
    <li> <a href="add2_form.php">Add2_form: formulaire</a> </li>
    <li>  <a href="index2.php">Index2</a> </li>
</ul>
</nav>


<h2>************************************************************************** </h2>


</header>

