<?php
include 'connection.php';

error_reporting(error_reporting() & ~E_NOTICE);

$sql = "INSERT INTO links (link , description) VALUES ('".$_POST['link']."' , '".$_POST['description']."')" ;
$pdo->exec($sql);

header('Location: index.php');

?>
