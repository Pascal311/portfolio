<?php
// Include Composer's autoloader (if using Symfony YAML)
require 'C:/xampp/htdocs/portfolio/vendor/autoload.php';

// Import the Yaml class from Symfony
use Symfony\Component\Yaml\Yaml;

// Parse the YAML file using Symfony YAML
$data = Yaml::parseFile('data/accueil.yaml');

// Debug: print the $data to check its structure
var_dump($data);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Portfolio</title>
    <link rel="stylesheet" href="../css/accueil.css">
</head>
<body>
    <?php 
    // Use absolute or correct relative path for includes
    include('C:/xampp/htdocs/portfolio/includes/header.php');
    ?>
    
    <main>
        <section>
            <h1><?= $data['nom'] ?></h1>
            <p><?= $data['accroche'] ?></p>
            <p><?= $data['presentation'] ?></p>
            <img src="../<?= $data['photo'] ?>" alt="Photo de <?= $data['nom'] ?>">
        </section>
    </main>

    <?php 
    // Use absolute or correct relative path for includes
    include('C:/xampp/htdocs/portfolio/includes/footer.php');
    ?>
</body>
</html>
