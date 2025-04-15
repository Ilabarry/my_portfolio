<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Activation du débogage
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Vérification méthode POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("HTTP/1.1 403 Forbidden");
    exit("Accès direct interdit");
}

// Chargement PHPMailer
require 'vendor/autoload.php';

// Validation des données
$required = ['prenom', 'nom', 'email', 'sujet', 'message'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        header('Location: index.html?status=error&message=Champ%20'.$field.'%20manquant#contact');
        exit();
    }
}

// Nettoyage des données
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$sujet = htmlspecialchars($_POST['sujet']);
$message = htmlspecialchars($_POST['message']);

if (!$email) {
    header('Location: index.html?status=error&message=Email%20invalide#contact');
    exit();
}

// Configuration PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'barryila35@gmail.com';
    $mail->Password = 'tozk tiao ubqo tjid';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    
    // Désactiver la vérification SSL (pour tests seulement)
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];

    // Expéditeur et destinataire
    $mail->setFrom($email, "$prenom $nom");
    $mail->addAddress('barryila35@gmail.com', 'Barry ILA');
    $mail->addReplyTo($email, "$prenom $nom");

    // Contenu
    $mail->isHTML(true);
    $mail->Subject = "Contact Portfolio: $sujet";
    $mail->Body = "<h3>Nouveau message de $prenom $nom</h3>
                  <p><strong>Email:</strong> $email</p>
                  <p><strong>Sujet:</strong> $sujet</p>
                  <p><strong>Message:</strong></p>
                  <p>$message</p>";
    
    $mail->AltBody = "Message de $prenom $nom ($email)\nSujet: $sujet\n\n$message";

    // Envoi
    if (!$mail->send()) {
        throw new Exception('Erreur lors de l\'envoi: ' . $mail->ErrorInfo);
    }

    // Succès
    header('Location: index.html?status=success#contact');
    exit();

} catch (Exception $e) {
    // Erreur
    error_log('Erreur PHPMailer: ' . $e->getMessage());
    header('Location: index.html?status=error&message=' . urlencode($e->getMessage()) . '#contact');
    exit();
}
?>