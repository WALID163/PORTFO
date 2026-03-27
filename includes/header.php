<?php

$page_actuelle = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nom; ?> — Portfolio BTS SIO</title>
    <link rel="stylesheet" href="/portfolio_simple/assets/css/style.css">
</head>
<body>

<nav>
    <a class="logo" href="/portfolio_simple/index.php"><?php echo $nom; ?></a>
    <ul>
        <li><a href="/portfolio_simple/index.php"
            class="<?php echo ($page_actuelle === 'index') ? 'active' : ''; ?>">Accueil</a></li>
        <li><a href="/portfolio_simple/vues/cv.php"
            class="<?php echo ($page_actuelle === 'cv') ? 'active' : ''; ?>">CV</a></li>
        <li><a href="/portfolio_simple/vues/projets.php"
            class="<?php echo ($page_actuelle === 'projets') ? 'active' : ''; ?>">Projets</a></li>
        <li><a href="/portfolio_simple/vues/contact.php"
            class="<?php echo ($page_actuelle === 'contact') ? 'active' : ''; ?>">Contact</a></li>
    </ul>
</nav>

<main>
