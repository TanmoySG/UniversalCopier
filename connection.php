<?php

/* 
 * Universal Copier
 * Project by Tanmoy Sen Gupta | tanmoysps@gmail.com | www.tanmoysg.com
 */

  try {
  $pdo = new PDO('mysql:host=localhost;dbname=uc', 'root', '');
  } catch (PDOException $e) {
  exit('Database Error');
  } 
?>



