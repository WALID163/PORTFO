<?php
// =============================================
// VUES/PROJETS.PHP — Liste des projets
// =============================================
include '../../portfolio_simple/config.php';
include '../../portfolio_simple/includes/header.php';
?>

<div class="page-header">
    <h1>Mes projets</h1>
    <p class="sous-titre">Réalisations BTS SIO</p>
</div>

<h2 class="titre-section">Liste des projets</h2>

<div class="projets-liste">
<?php
// Boucle foreach sur les projets
foreach ($projets as $projet) {

    // Condition : statut du projet
    if ($projet['statut'] === 'valide') {
        $badge_class = 'badge-valide';
        $badge_texte = '✔ Validé';
    } else {
        $badge_class = 'badge-en_cours';
        $badge_texte = '⏳ En cours';
    }
?>
    <div class="projet-card">
        <h3><?php echo $projet['titre']; ?></h3>
        <p><?php echo $projet['desc']; ?></p>
        <span class="badge <?php echo $badge_class; ?>">
            <?php echo $badge_texte; ?>
        </span>
    </div>
<?php } // fin foreach ?>
</div>

<?php include '../../portfolio_simple/includes/footer.php'; ?>
