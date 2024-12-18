<?php
// Inclure l'autoload de Composer pour charger les dépendances (y compris Symfony YAML)
require_once 'vendor/autoload.php'; // Si votre fichier composer.json est dans le dossier racine

use Symfony\Component\Yaml\Yaml;

// Charger les données du fichier YAML
$data = Yaml::parseFile('data/data.yaml');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['accueil']['nom']) ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <?php include 'pages/accueil.php'; ?>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
