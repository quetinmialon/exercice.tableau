<?php
// ATTENTION, ce fichier ne doit PAS être modifié pour fonctionner !
$data = require __DIR__.'/tableau.php';
$user = current(array_filter(
    $data['users'],
    fn ($user) => $user['id'] === (int) $_GET['user_id']
));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles associés à <?= $user['name'] ?></title>
</head>
<body>
    <h1>Articles associés à <?= $user['name'] ?></h1>
    <?php foreach ($user['posts'] as $post) : ?>
        <article>
            <h2><?= $post['id'] ?> : <?= $post['title'] ?></h2>
            <p><?= $post['excerpt'] ?></p>
        </article>
        <div>
            <?php foreach ($post['comments'] as $comment) : ?>
                <p><?= $comment['content'] ?></p>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
</body>
</html>