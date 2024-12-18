<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/portfolio/yaml/yaml.php");

// Charger le fichier YAML avec le chemin absolu
$data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . "/portfolio/data/competences.yaml");
?>
?>

<section id='competences'>

<h1><?php echo $data['titre']; ?></h1>
<?php
foreach($data['domaines'] AS $domaine){
    echo $domaine['nom']."<br>";
    foreach($domaine['competences'] AS $competence){
        echo $competence['nom']." : ". $competence['niveau']."<br>";
    }
}

?>
</section>