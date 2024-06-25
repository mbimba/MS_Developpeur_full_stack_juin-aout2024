
<?php
 
  try 
  {        
      $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
      echo "Erreur : " . $e->getMessage() . "<br>";
      echo "N° : " . $e->getCode();
      die("Fin du script");
  }       
?> 




<!--  Une fois connectés à la base, nous allons afficher les différents artistes de notre base de données. Nous allons donc utiliser le code suivant :  -->
<?php
$requete = $db->query("SELECT * FROM artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO: Connexion à la base de données "record"</title>
</head>
<html>
<body>
<h1 style="text-align:center">Test PDO: CONNEXION À LA BASE DE DONNÉES "RECORD"</h1>
<h4>Les différents artistes de notre base de données sont:</h4>
<?php foreach ($tableau as $artist): ?>
        <div>
            <?= $artist->artist_name ?>
        </div>
    <?php endforeach; ?>







<!--    -->

<!--    -->
<?php
?>

<!--    -->













</body>
</html>