<?php

include '../includes/config.php';
include '../includes/database.php';

$naam = $_POST['id'];

$from = $_GET['from'];

$sql = "UPDATE song SET favorite = 0 WHERE id_song = '$naam'";
$result = $mysqli->query($sql);

if ($from == "article") {
  header('Location: ../index.php?action=home');
}
if ($from == "favorite") {
  header('Location: ../index.php?action=favorite');
}

 ?>
