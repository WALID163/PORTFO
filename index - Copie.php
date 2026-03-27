<?php

include '../portfolio_simple/config.php';
include '../portfolio_simple/includes/header.php';


$heure = (int) date('H');

if ($heure >= 6 && $heure < 12) {
    $salutation = 'Bonjour';
} elseif ($heure >= 12 && $heure < 18) {
    $salutation = 'Bon après-midi';
} elseif ($heure >= 18 && $heure < 22) {
    $salutation = 'Bonsoir';
} else {
    $salutation = 'Bonne nuit';
}
?>


<div class="page-header">
    <h1>Portfolio de <?php echo $nom; ?></h1>
    <p class="sous-titre"><?php echo $specialite; ?> &mdash; Promo <?php echo $promo; ?></p>
    <div class="salutation">
        <?php echo $salutation; ?> &mdash; il est <?php echo date('H:i'); ?>
    </div>
</div>


<div class="btn-row">
    <a href="vues/projets.php" class="btn btn-bleu">Voir mes projets</a>
    <a href="vues/contact.php" class="btn btn-contour">Me contacter</a>
</div>


<div class="stats">
    <div class="stat-card">
        <div class="chiffre"><?php echo count($projets); ?></div>
        <div class="label">Projets réalisés</div>
    </div>
    <div class="stat-card">
        <div class="chiffre"><?php echo count($competences); ?></div>
        <div class="label">Compétences</div>
    </div>
    <div class="stat-card">
        <div class="chiffre">2</div>
        <div class="label">Années BTS</div>
    </div>
</div>

<?php include '../portfolio_simple/includes/footer.php'; ?>
