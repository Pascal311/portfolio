<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/portfolio/vendor/symfony/yaml/Yaml.php");

// Charger le fichier YAML avec le chemin absolu
$data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . "/portfolio/data/realisations.yaml");
?>
?>

<section id='realisations'>

<h1><?php echo $data['titre']; ?></h1>
<?php
foreach($data['activites'] AS $activite){
    echo $activite['nom']." : <br>"; 
    echo $activite['description']."<br>";
    echo $activite['illustrations']."<br>";
    echo $activite['documents']."<br>"; 
    
}

?>
</section>