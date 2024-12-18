<?php
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
