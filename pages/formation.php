<?php
// Afficher toutes les erreurs PHP pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Chemin vers les dépendances installées via Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Chargement manuel de Yaml.php si non géré par Composer (ajuste le chemin si nécessaire)
if (!class_exists('Symfony\Component\Yaml\Yaml')) {
    require_once __DIR__ . 'vendor/symfony/yaml/Yaml.php';
}

// Charger le fichier YAML avec le chemin absolu
$data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . "/portfolio/data/formation.yaml");

?>

<section id='formation'>

<h1><?php echo $data['titre']; ?></h1>
<?php
foreach($data['etablissements'] AS $etablissement){
    echo $etablissement['nom']." : <br>"; 
    echo $etablissement['formation']."<br>";
    echo $etablissement['periode']."<br>";
    echo $etablissement['lieu']."<br>"; 
    echo $etablissement['contenu']."<br>";
}

echo "<a href='../CV.pdf' target='_blank'>Télécharger mon CV</a>"

?>
</section>
