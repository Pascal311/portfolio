<?php
include '../includes/functions.php';
$data = yaml_parse_file('../data/data.yaml');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation - Portfolio</title>
    <link rel="stylesheet" href="../css/formation.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <section class="formation">
            <h2>Mon Parcours de Formation</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Établissement</th>
                        <th>Dates</th>
                        <th>Lieu</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['formation'] as $formation): ?>
                        <tr>
                            <td><?= $formation['nom'] ?></td>
                            <td><?= $formation['etablissement'] ?></td>
                            <td><?= $formation['date_debut'] ?> - <?= $formation['date_fin'] ?></td>
                            <td><?= $formation['lieu'] ?></td>
                            <td><?= $formation['contenu'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>
                <a href="../<?= $data['formation'][0]['cv_pdf'] ?>" target="_blank">Télécharger mon CV (PDF)</a>
            </p>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
