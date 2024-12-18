<?php

// Utiliser un chemin absolu pour inclure yaml.php
require_once($_SERVER['DOCUMENT_ROOT'] . "/portfolio/yaml/yaml.php");

// Charger le fichier YAML avec le chemin absolu
$data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . "/portfolio/data/accueil.yaml");
?>

<section id='accueil'>
    <h1><?php echo $data['titre']; ?></h1>
    <?php
    foreach($data['descriptions'] as $description) {
        echo $description['nom'] . "<br>" . $description['contenu'] . "<br>";
    }
    ?>
</section>
