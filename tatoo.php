<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINIK -->
    <link rel="stylesheet" href="src/css/navbar.css">
    <link rel="stylesheet" href="src/css/tatoo.css">

    <title>Votre Nom - Tatoo Gallery</title>
</head>
<body>
    <!-- NAVIGATION -->
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index.php" >Accueil</a></li>
                <li><a href="tatoo.php" class="active">Tatoo</a></li>
                <li><a href="piercing.php">Piercing</a></li>
                <li><a href="infos.php">Infos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <h1 class="logo">Votre Nom</h1>
        </div>
    </nav>  

    <div class="content-body">
        <br><br><br><br>

        <div class="text-accueil">
            <hr> <br>
            <h1>Tatoo Gallery</h1><br>
            <hr>
        </div>

        <div class="gallerys">
            <div class="gallery">
                <img src="src/img/Tatoo-Gallery/1.jpg" alt="Tatoo 1">
                <img src="src/img/Tatoo-Gallery/2.jpg" alt="Tatoo 2">
                <img src="src/img/Tatoo-Gallery/3.jpg" class="space" alt="Tatoo 3" style="width: 17.3%;">
                <img src="src/img/Tatoo-Gallery/4.jpg" alt="Tatoo 4">
            </div>
            <br><br><br><br><br>
            <div class="gallery">
                <img src="src/img/Tatoo-Gallery/5.jpg" alt="Tatoo 1">
                <img src="src/img/Tatoo-Gallery/6.jpg" alt="Tatoo 2">
                <img src="src/img/Tatoo-Gallery/7.jpg" alt="Tatoo 3">
                <img src="src/img/Tatoo-Gallery/8.jpg" alt="Tatoo 4">
            </div>
            <br><br><br><br><br>
            <div class="gallery">
                <img src="src/img/Tatoo-Gallery/9.jpg" alt="Tatoo 1">
                <img src="src/img/Tatoo-Gallery/10.jpg" alt="Tatoo 2">
                <img src="src/img/Tatoo-Gallery/11.jpg" alt="Tatoo 3">
                <img src="src/img/Tatoo-Gallery/12.jpg" alt="Tatoo 4">
            </div>
        </div>
    </div>
    <address>© Votre nom 2024 - <a href="MentionsLegales.php"> Mentions légales</a></address>

    
    <!-- JS -->
</body>
</html>