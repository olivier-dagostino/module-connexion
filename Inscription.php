<?php
$connect= mysqli_connect("localhost","root","root","moduleconnexion");


if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $password = $_POST['password'];
  $login = $_POST['login'];
  $conf = $_POST['conf']; 


  if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
    if ($password == $conf) { 
      echo 'Compte créé';
      $req= mysqli_query($connect,"INSERT INTO utilisateurs (login,prenom,nom,password)
    VALUES('$login','$prenom','$nom','$password')");
    } else {echo 'Confirmer votre MDP';}

  } else {echo 'Tous les champs doivent être remplis';}
  
} 

?>

<!DOCTYPE html>
<html lang="Fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>site</title>
  </head>
  <body>
  <?php require'header.php';?>
    <form action="" method="post">
      <input name="login" type="text" placeholder="username"  />
        <input name="prenom" type="text" placeholder="prenom" />
        <input name="nom" type="text" placeholder="nom" />
        <input name="password" type="password" placeholder="Ton mdp"/>
        <input name="conf" type="password" placeholder="remarque bouffon" />
      <input name="env" type="submit" placeholder="clic batard">
      <p class="message">T'as un compte 😮 ? Par ici bebou <a href="connexion.php">inscription</a></p>
    </form>


  </body>
</html>