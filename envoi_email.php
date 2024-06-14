<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail où vous souhaitez recevoir les données
    $destinataire = "votreadresse@mail.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau message depuis le formulaire de contact";

    // Contenu de l'e-mail
    $contenu = "Adresse e-mail: $email\n";
    $contenu .= "Message:\n$message";

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $contenu);

    // Redirection après l'envoi du formulaire (vous pouvez rediriger vers une page de confirmation)
    header("Location: confirmation.html");
    exit;
}
?>
