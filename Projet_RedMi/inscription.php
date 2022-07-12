<?php
require './base_connection.php';
$message="";
if(isset($_POST['submit'])){
    $Nom = mysqli_real_escape_string($conn, $_POST['Nom']);
    $email = mysqli_real_escape_string($conn, $_POST['e-mail']);
    $password1 = mysqli_real_escape_string($conn, md5($_POST['password1']));
    $password2 = mysqli_real_escape_string($conn, md5($_POST['password2']));   
    $select = mysqli_query($conn,"SELECT * FROM user_form WHERE email = '$email' AND password = '$password1'") or die('query failed');
    
    if (mysqli_num_rows($select) > 0){
        $message .= 'user already exist';
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:login.php');
    }else{
        mysqli_query($conn, " INSERT INTO user_form(Name,email,password)  VALUES('$Nom','$email','$password1')") 
                or die('query failed');
            
        $message .= 'registered successfully';
        }
        //password_verify($message, $hash);
}

require 'base_deconnection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>inscription</title>
        <link rel="stylesheet" href="inscriptioncss.css">
    </head>
    <body>
        <?php
        if(isset($message)){
            echo $message;
        }
        ?>
        <div class="form-container">
            <form action="" method="post">
                <h3>S'inscrire</h3>
                <input type="text" name="Nom" required placeholder="Nom" class="box">
                <input type="email" name="e-mail" required placeholder="Adress e-mail" class="box"><!-- comment -->
                <input type="password" name="password1" required placeholder="Mot de pass" class="box"><!-- comment -->
                <input type="password" name="password2" required placeholder="Confirmer le mot de passe" class="box">
                <input type="submit" name="submit" class="btn" value="S'inscrire">
                <p>Vous avez déjà un compte? <a href="login.php">Se connecter</a></p>
            </form>
        </div>
     
    </body>
</html>
