<?php
// Déconnexion de la base de données cuicui
if ($conn) {
  $deconnexion_reussie = mysqli_close($conn);
  if (!$deconnexion_reussie) {
    $message_erreur .= "Erreur de déconnexion<br>\n";
  }
}
?>