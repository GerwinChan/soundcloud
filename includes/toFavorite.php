<?php

include '../includes/config.php';
include '../includes/database.php';

$naam = $_POST['id'];

$sql = "UPDATE song SET favorite = 1 WHERE id_song = ' $naam '";
$result = $mysqli->query($sql);


header('Location: ../index.php?action=home');

 ?>
