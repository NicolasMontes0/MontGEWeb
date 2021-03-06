<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>MontGE</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <?php
    require_once "Connexion.php";
    session_start();
    Connexion::initConnexion();
    ?>
    <a href="index.php?module=Accueil"><img src="./images/icone.jpg"/ width = 150px></a>
    <div id="nav">
        <nav>
            <a href="index.php?module=Recherche&action=triDispo">Réserver</a>
        </nav>
    </div>
</header>

<main>
    <?php
    if (isset($_GET['module']))
        $module = $_GET['module'];
    else
        $module = "accueil";

    switch($module){
        case "Recherche" :
            include_once 'module/module_Recherche/ModRecherche.php';
            $mod = new ModRecherche();
            break;
        default :
            include_once 'module/module_Accueil/ModAccueil.php';
            $mod = new ModAccueil();
            break;
    }
    ?>
</main>

<footer>
    <div class="sousFooter">
        <input class="footerButton" type="button" value = "Contact" />
        <input class="footerButton" type="button" value = "FAQ" />
        <input class="footerButton" type="button" value = "Conditions d'utilisation" />
        <input class="footerButton" type="button" value = "Cookies" >
        <input class="footerButton" type="button" value = "Vie privée" />

        <p>© MontGE, Mars 2022 - Nicolas MONTES - Tous droits réservés.</p>
    </div>
</footer>
</body>
</html>