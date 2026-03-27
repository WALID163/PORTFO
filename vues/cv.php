<?php
// =============================================
// VUES/CV.PHP — Page compétences
// =============================================
include '../../portfolio_simple/config.php';
include '../../portfolio_simple/includes/header.php';
?>

<div class="page-header">
    <h1>Mon CV</h1>
    <p class="sous-titre">Compétences &amp; formation</p>
</div>

<!-- COMPÉTENCES en boucle PHP -->
<h2 class="titre-section">Mes compétences</h2>

<div class="competences-liste">
<?php
// On parcourt le tableau $competences avec foreach (config.php)
foreach ($competences as $comp) {
    echo '<div class="competence-item">' . $comp . '</div>';
}
?>
</div>

<!-- FORMATION -->
<h2 class="titre-section">Formation</h2>

<div class="competences-liste">
    <div class="competence-item">BTS SIO SISR &mdash; 2024/2026 &mdash; Lycée, Ville</div>
    <div class="competence-item">Bac STI2D &mdash; 2023/2024 &mdash; Lycée, Ville</div>
</div>

<!-- STAGES -->
<h2 class="titre-section">Expériences</h2>

<div class="competences-liste">
    <div class="competence-item">Stage Technicien réseau &mdash; 2025 &mdash; Entreprise, Ville</div>
    <div class="competence-item">Stage Support informatique &mdash; 2024 &mdash; PME, Ville</div>
</div>

<?php include '../../portfolio_simple/includes/footer.php'; ?>
