<?php

$conn = mysqli_connect('localhost','root','','redmi');
if ($conn) {
  // Changement du jeu de caractères pour utf-8                    
  mysqli_set_charset($conn, "utf8");
} else {
  $message_erreur .= "Erreur de connexion<br>\n";
  $message_erreur .= "  Erreur n° " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "<br>\n";
}
?>
