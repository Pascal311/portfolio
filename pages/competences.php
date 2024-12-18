<?php
include '../includes/functions.php';
$data = yaml_parse_file('../data/data.yaml');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences - Portfolio</title>
    <link rel="stylesheet" href="../css/competences.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <section>
            <h2>Mes Compétences</h2>
            <?php foreach ($data['competences'] as $competence): ?>
                <h3><?= $competence['domaine'] ?></h3>
                <ul>
                    <?php foreach ($competence['items'] as $item): ?>
                        <li>
                            <?= $item['skill'] ?>
                            <div class="progress-bar">
                                <div class="progress" style="width: <?= $item['niveau'] ?>%;"></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
