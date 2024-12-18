<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pascal Griffon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

require_once("yaml/yaml.php");


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


<?php include 'pages/accueil.php'; ?>
<?php include 'pages/competences.php'; ?>
<?php include 'pages/formation.php'; ?>
<?php include 'pages/realisations.php'; ?>
<?php include 'pages/contact.php'; ?>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Mon Portfolio</p>
</footer>

</body>
</html>