<?php
// app/readMessages.php

// Configuration de la base de données
$dbHost = 'hetic.mysql.database.azure.com';
$dbName = 'hetic';
$dbUser = 'azureuser';
$dbPass = '@bcdefgh!2025';

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête pour récupérer les messages
    $stmt = $pdo->query('SELECT date, content FROM messages ORDER BY date DESC');
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Envoi des messages en format JSON
    header('Content-Type: application/json');
    echo json_encode($messages);
} catch (PDOException $e) {
    // Gestion des erreurs
    echo 'Erreur : ' . $e->getMessage();
}
?>
