<?php
$conn = new mysqli('localhost', 'root', '', 'uc');

error_reporting(error_reporting() & ~E_NOTICE);

$sql =  $conn->prepare("INSERT INTO links (link , description) VALUES (? , ?)") ;
$sql->bind_param("ss", $_POST['link'], $_POST['description']);
$sql->execute();

header('Location:index.php');

?>