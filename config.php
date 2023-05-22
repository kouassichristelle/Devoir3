<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "id20587375_admin"; // Nom d'utilisateur MySQL
$password = "Admin@23"; // Mot de passe MySQL
$dbname = "id20587375_aventure"; // Nom de la base de données

try {
    // Connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Configuration des options PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // En cas d'erreur de connexion
    echo "La connexion à la base de données a échoué : " . $e->getMessage();
    die();
}
