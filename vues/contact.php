<?php
// =============================================
// VUES/CONTACT.PHP — Formulaire de contact
// =============================================
include '../../portfolio_simple/config.php';
include '../../portfolio_simple/includes/header.php';

// Traitement du formulaire quand il est envoyé (POST)
$message_envoye = false;
$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération des champs
    $f_nom   = trim($_POST['nom']   ?? '');
    $f_email = trim($_POST['email'] ?? '');
    $f_msg   = trim($_POST['msg']   ?? '');

    // Vérification des champs (condition)
    if ($f_nom === '' || $f_email === '' || $f_msg === '') {
        $erreur = 'Veuillez remplir tous les champs.';
    } elseif (!filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
        $erreur = 'Adresse email invalide.';
    } else {
        // Tout est bon : message envoyé
        $message_envoye = true;
    }
}
?>

<div class="page-header">
    <h1>Me contacter</h1>
    <p class="sous-titre">Disponible pour un stage ou une alternance</p>
</div>

<!-- Coordonnées -->
<div class="infos-contact">
    <p>📧 <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
    <p>👤 <?php echo $nom; ?> — <?php echo $specialite; ?></p>
</div>

<!-- Formulaire -->
<div class="form-contact">

    <?php if ($message_envoye) : ?>
        <div class="succes">
            ✅ Merci <?php echo htmlspecialchars($f_nom); ?> ! Je vous réponds sous 48h.
        </div>
    <?php else : ?>

        <?php if ($erreur !== '') : ?>
            <div class="erreur">⚠ <?php echo $erreur; ?></div>
        <?php endif; ?>

        <form method="POST" action="">

            <div class="champ">
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom"
                       placeholder="Jean Dupont"
                       value="<?php echo htmlspecialchars($_POST['nom'] ?? ''); ?>">
            </div>

            <div class="champ">
                <label for="email">Votre email</label>
                <input type="email" id="email" name="email"
                       placeholder="jean@exemple.fr"
                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </div>

            <div class="champ">
                <label for="msg">Votre message</label>
                <textarea id="msg" name="msg"
                          placeholder="Votre message..."><?php echo htmlspecialchars($_POST['msg'] ?? ''); ?></textarea>
            </div>

            <button type="submit" class="btn btn-bleu">Envoyer le message</button>

        </form>

    <?php endif; ?>

</div>

<?php include '../../portfolio_simple/includes/footer.php'; ?>
