<?php
// Connexion à la base de données
include "dbconnect.php";

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$filiere = $_POST['filiere'];
$niveau = $_POST['niveau'];
$id_stage = $_POST['id_stage'];

if($nom && $num && $mail && $filiere && $niveau && $id_stage){
    // Préparer la requête SQL
$sql = "INSERT INTO stagiaire (nom, num, mail, filiere, niveau, id_stage)
VALUES ('$nom', '$num', '$mail', '$filiere', '$niveau', '$id_stage')";
// Exécuter la requête SQL
if ($conn->query($sql) === TRUE) {
     header("Location:stagiaire.php");
 } else {
     echo "Erreur lors de l'ajout du stagiaire : " . $conn->error;
 }

}else{
    echo("Veulleir remplire toute les champs");
}



// Fermer la connexion à la base de données
$conn->close();
?>