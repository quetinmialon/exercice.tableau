<?php
// ATTENTION, ce fichier ne doit PAS être modifié pour fonctionner !
$data = require __DIR__.'/tableau.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes utilisateurs</title>
</head>
<body>
    <h1>Mes utilisateurs</h1>

    <?php foreach ($data['users'] as $user): ?>
    <dl>
        <dt>Nom complet :</dt>
        <dd><?= $user['name'] ?></dd>
        <dt>Adresse e-mail :</dt>
        <dd><?= $user['email'] ?></dd>
        <dt>Administrateur :</dt>
        <dd><?= $user['isAdmin'] ? 'Oui' : 'Non' ?></dd>
        <dt>Adresse :</dt>
        <dd>
            <ul>
                <?php foreach ($user['contactDetails']['address'] as $key => $value) : ?>
                <li><?= $key ?> : <?= $value ?? 'Non renseigné' ?></li>
                <?php endforeach ?>
            </ul>
        </dd>
        <dt>Numéro de téléphone :</dt>
        <dd><?= $user['contactDetails']['phoneNumber'] ?></dd>
        <dt>Articles</dt>
        <dd><a href="exercice-2.php?user_id=<?= $user['id'] ?>">Consulter (<?= count($user['posts']) ?> articles)</a></dd>
    </dl>
    <?php endforeach; ?>
</body>
</html>