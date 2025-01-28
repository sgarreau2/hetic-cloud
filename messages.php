<?php
// presentation/index.php

// Configuration de l'URL du serveur applicatif
$appServerUrl = 'http://10.0.2.4:8080/app/lectureDB.php';

// Récupération des messages depuis le serveur applicatif
$response = file_get_contents($appServerUrl);
$messages = json_decode($response, true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des messages</title>
</head>
<body>
    <h1>Messages</h1>
    <ul>
        <?php foreach ($messages as $message): ?>
            <li><strong><?php echo htmlspecialchars($message['date']); ?>:</strong> <?php echo htmlspecialchars($message['content']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
