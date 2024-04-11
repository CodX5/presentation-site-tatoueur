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
    <link rel="stylesheet" href="src/css/index.css">

    <title>Votre nom - Accueil</title>
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
                <li><a href="index.php"  class="active">Accueil</a></li>
                <li><a href="tatoo.php">Tatoo</a></li>
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
        <h1>Découvrez les meilleurs <span class="auto-typed"></span></h1> <br>
            <h3><b>Votre Nom</b> se compose d’une équipe de professionnels à votre disposition <br> pour réaliser vos projets les plus fous.</h3>
            <h3>Les artistes spécialisés sont disposés à réaliser vos projets personnels dans leur propre style.</h3>
            <h3>N’hésitez pas à nous contacter et reserver votre créneaux. Les devis sont gratuits.</h3>
            <h3>Les piercing sont avec ou sans rendez vous et les ventes de bijoux se font sur place.</h3>
        </div>
    </div>
    <address>© Votre nom 2024 - <a href="MentionsLegales.php"> Mentions légales</a></address>

    
    <!-- JS -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        let typed = new Typed('.auto-typed', {
            strings: ['tatoueurs', 'perceurs'],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
            fadeOut: true,
            fadeOutClass: 'typed-fade-out',
            fadeOutDelay: 500
        })
    </script>
</body>
</html>