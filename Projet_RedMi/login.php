<?php require './base_connection.php';
  session_start();
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}

if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   
   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   
   if(mysqli_num_rows($select) > 0){
      $_SESSION['user_nom'] = $email;
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
      
   }   else{
      $message[] = 'incorrect password or email!';
   }
}
require './base_deconnection.php';
//?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>connection</title>

<!--    custom css file link  -->
   <link rel="stylesheet" href="inscriptioncss.css">

</head>
<body><!--

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
--><div class="form-container">
  <form action="" method="post">
  
      <h3>Se connecter</h3>
      <input type="email" name="email" required placeholder="Adress e-mail" class="box">
      <input type="password" name="password" required placeholder="Mot de pass" class="box">
      <input type="submit" name="submit" class="btn" value="Se connecter">
      <p>Cliquez ici pour <a href="inscription.php">S'inscrire</a></p>
   </form>

</div>

</body>
</html>
