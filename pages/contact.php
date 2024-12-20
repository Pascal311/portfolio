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
$data = yaml_parse_file(__DIR__ . '/../data/contact.yaml');
?>

<section id='contact'>

<h1><?php echo $data['titre']; ?></h1>
<?php
foreach($data['formulaire'] AS $formulaire){
    echo $formulaire['nom']." : <br>";
    echo $formulaire['mail']." : <br>";
    echo $formulaire['objet']." : <br>";
    echo $formulaire['contenu']." : <br>";

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "jean.dupont@example.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'];

    if (mail($to, $subject, $message, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite.";
    }
}

?>
</section>