<?php



include '../includes/config.php';
include '../includes/database.php';


$naam = $_POST['link'];
$trackname = $_POST['naampje'];
$naam = substr($naam, 71, -22);

$sql = "INSERT INTO song (track,Name) VALUES ('$naam','$trackname')";



if(!mysqli_query($mysqli,$sql))
{

echo 'Not inserted';

}
else {

  echo 'Inserted';
}

header("refresh:2; url=../index.php?action=home");

 ?>
