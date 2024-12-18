<?php
include '../includes/functions.php';
$data = yaml_parse_file('../data/data.yaml');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <section>
            <h2>Contactez-moi</h2>
            <form method="POST" action="../send_mail.php">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject">Objet :</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
