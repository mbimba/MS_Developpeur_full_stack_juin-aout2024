<?php
// details.php

// Include database connection and header
require_once 'header2.php';

// Retrieve disc_id from URL
$disc_id = $_GET['disc_id'];

// Retrieve record from disc table
$sql = "SELECT * FROM disc WHERE disc_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $disc_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Display record details
echo "<p>Title: " . $row['dic_title'] . "</p>";
echo "<p>Artist: " . $row['artist_name'] . "</p>";
echo "<p>Image: <img src='images/" . $row['image'] . "'></p>";

// Links to update and delete forms
echo "<p><a href='update_form.php?disc_id=" . $disc_id . "'>Update</a> | <a href='delete_script.php?disc_id=" . $disc_id . "'>Delete</a> | <a href='index2.php'>Back to List</a></p>";

// Include footer
require_once 'footer2.php';


?>