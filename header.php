<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Accueil Mon Site</title>
</head>
<body>
    <header>
        <div class="header-top">
            <nav>
                <label for="menu-mobile" class="menu-mobile">Menu</label> <!-- Case à cocher -->
                <input type="checkbox" id="menu-mobile" role="button"> <!-- Case à cocher -->
                <ul>
                    <li class="menu-accueil"><a href="index.php">Accueil</a></li>
                    <li class="menu-espace-membre"><p>Espace Membre</p>
                        <ul class="submenu">
                        <?php 
                        if (isset($_SESSION["id"])) 
                        {
                            echo "<li><a href='crash.php'>Déconnexion</a></li>";
                            echo "<li><a href='profil.php'>Profil</a></li>"; 
                        } 
                            else 
                            {
                                echo "<li><a href='connexion.php'>Se connecter</a></li>";
                                echo "<li><a href='Inscription.php'>Sinscrire</a></li>";
                            }
                        ?>
                        </ul>
                    </li>
                    <li class="menu-contact"><a href="#">Contact</a></li> 
                </ul>
            </nav>
        </div>
        <div class="header-bottom">
            <img id="logo-leafcoffee" src="img/logoleafcoffee.png" alt="logoleafcoffee">
        </div>
    </header>