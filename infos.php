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
    <link rel="stylesheet" href="src/css/infos.css">

    <title>Votre Nom - Infos</title>
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
                <li><a href="tatoo.php">Tatoo</a></li>
                <li><a href="piercing.php">Piercing</a></li>
                <li><a href="infos.php"  class="active">Infos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <h1 class="logo">Votre Nom</h1>
        </div>
    </nav>  

    <div class="content-body">
        <br><br><br><br>
        <div class="text-accueil">
            <hr> <br>
            <h1>Information</h1><br>
            <hr>
        </div>

        <div class="cards">
            <div class="card">
                <img width="48" height="48" src="https://img.icons8.com/fluency-systems-filled/48/FFFFFF/border-color.png" alt="border-color"/>                
                <h3>Matériel</h3>
                <p>Tout le matériel professionnel utilisé permet de répondre aux problématiques liées au conditionnement, au nettoyage et à la stérilisation des instruments. Le matériel ainsi que la salle favorise l'élaboration de votre tatouage dans de bonnes conditions pour vivre l'expérience du tatouage comme il se doit.</p>
            </div>
            <div class="card">
                <img width="64" height="64" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/lounge-chair--v1.png" alt="lounge-chair--v1"/>        
                <h3>LA SALLE</h3>
                <p>Une salle présente dans le shop et totalement stérilisée est dédiée à la réalisation de votre tatouage. La mise en place de cette pièce a été pensée de telle sorte à vous mettre en confiance. Le mobilier présent vous permet de pouvoir vous installer confortablement.</p>
            </div>
            <div class="card">
                <img width="48" height="48" src="https://img.icons8.com/ios-filled/48/FFFFFF/diploma.png" alt="diploma"/>              
                <h3>DIPLÔMES ET INFORMATIONS</h3>
                <p>Vous trouverez dans le shop les informations nécessaires à connaître et à prendre en compte avant la réalisation de votre tatouage. Mes diplômes obtenus et reconnus (tels que mon attestation de suivi de formation et mon diplôme de l'Institut Supérieur de Décoration) sont également présents dans la salle.</p>
            </div>
        </div>
    </div>
    <address>© Votre nom 2024 - <a href="MentionsLegales.php"> Mentions légales</a></address>

    
    <!-- JS -->
</body>
</html>