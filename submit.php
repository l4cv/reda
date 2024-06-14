<?php
// Récupérer les données du formulaire
$email = $_POST['email'];
$message = $_POST['message'];

// Formatage des données pour l'enregistrement dans un fichier
$data = "Adresse e-mail : $email\nMessage :\n$message\n\n";

// Nom du fichier où enregistrer les données
$filename = 'messages.txt';

// Écriture des données dans le fichier (mode ajout)
file_put_contents($filename, $data, FILE_APPEND);

// Redirection vers la page de confirmation
header('Location: confirmation.html');
exit;
?>
