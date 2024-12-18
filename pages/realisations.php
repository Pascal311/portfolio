<?php
include '../includes/functions.php';
$data = yaml_parse_file('../data/data.yaml');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations - Portfolio</title>
    <link rel="stylesheet" href="../css/realisations.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <section class="realisations">
            <h2>Mes Réalisations</h2>
            <?php foreach ($data['realisations'] as $realisation): ?>
                <div class="card">
                    <img src="../<?= $realisation['image'] ?>" alt="<?= $realisation['titre'] ?>">
                    <h3><?= $realisation['titre'] ?></h3>
                    <p><?= $realisation['description'] ?></p>
                    <?php if (!empty($realisation['documents'])): ?>
                        <p>
                            <strong>Documents associés :</strong>
                            <ul>
                                <?php foreach ($realisation['documents'] as $doc): ?>
                                    <li><a href="../<?= $doc ?>" target="_blank">Télécharger</a></li>
                                <?php endforeach; ?>
                            </ul>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
