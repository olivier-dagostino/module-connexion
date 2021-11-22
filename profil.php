<?php

session_start();
$id = $_SESSION["id"];
$bdd = mysqli_connect("localhost","root","root","moduleconnexion"); 

$req= mysqli_query($bdd,"SELECT * FROM utilisateurS WHERE id = $id");

$res= mysqli_fetch_all($req,MYSQLI_ASSOC);
$login = $res[0]['login'];
$prenom = $res[0]['prenom'];
$nom = $res[0]['nom'];
$password = $res[0]['password']; 


if (isset($_POST['env']))
{
    $nom1 = $_POST['nom'];
    $prenom1 = $_POST['prenom'];
    $password1 = $_POST['password'];
    $login1 = $_POST['login'];
    $req2= mysqli_query($bdd,"UPDATE utilisateurS SET login='$login1', prenom='$prenom1', nom='$nom1', password='$password1' WHERE  id = $id ");
    header("Location: profil.php");
} 





?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="php.css">
</head>
    <body>
    <form name="formu" action="" method="post">
        <label for ="login">Login</label>
        <input id="login" name="login" value="<?php echo $login?>" type="text" placeholder="Username"/>
        <label for ="prenom">Prenom</label>
        <input name="prenom" value="<?php echo $prenom?>" type="text" placeholder="Prenom" />
        <label for ="nom">Nom</label>
        <input name="nom" value="<?php echo $nom?>" type="text" placeholder="Nom" />
        <label for ="password">Password</label>
        <input name="password" value="<?php echo $password?>" type="password" placeholder="Votre Mot de Passe"/>
        <input name="env" type="submit" placeholder="Envoyer">
    </form>


    </body>
</html>