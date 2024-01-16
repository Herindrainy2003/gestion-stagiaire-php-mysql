<?php
// Démarrez la session (si elle n'est pas déjà démarrée)
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION["nom"])) {
    // Redirigez vers la page de connexion
    header("Location: login.php");
    exit;
}
?>
