<?php
// Afficher toutes les erreurs PHP pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Chemin vers les dépendances installées via Composer
require_once __DIR__ . '/vendor/autoload.php';

// Chargement manuel de Yaml.php si non géré par Composer (ajuste le chemin si nécessaire)
if (!class_exists('Symfony\Component\Yaml\Yaml')) {
    require_once __DIR__ . 'vendor/symfony/yaml/Yaml.php';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pascal Griffon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Mon Portfolio</h1>
    <nav>
        <a href="#accueil">Accueil</a>
        <a href="#competences">Compétences</a>
        <a href="#formation">Formation</a>
        <a href="#realisations">Réalisations</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<?php
// Inclusion des sections de la page
include 'pages/accueil.php';
include 'pages/competences.php';
include 'pages/formation.php';
include 'pages/realisations.php';
include 'pages/contact.php';
?>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Mon Portfolio</p>
</footer>

</body>
</html>
