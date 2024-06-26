<?php
require_once('fonctions.php');

$disc_id = $_GET['disc_id'];
deleteDisque($disc_id);

header("Location: index.php");
exit;

?>