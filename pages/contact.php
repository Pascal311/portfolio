<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/portfolio/yaml/yaml.php");

// Charger le fichier YAML avec le chemin absolu
$data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . "/portfolio/data/contact.yaml");
?>
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