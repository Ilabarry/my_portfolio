<?php
// Affichage d'erreurs pour le dev
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Bloquer tout affichage inutile
ob_start();
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom  = htmlspecialchars($_POST['firstName'] ?? '');
    $nom     = htmlspecialchars($_POST['lastName'] ?? '');
    $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $sujet   = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

    if (!$email) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Email invalide']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Config SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'barryila20@gmail.com';
        $mail->Password = 'alnd yzka ehpw lozi'; // Utiliser un mot de passe d'application
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Expéditeur et destinataire
        $mail->setFrom($email, "$prenom $nom");
        $mail->addAddress('barryila35@gmail.com');

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = $sujet;
        $mail->Body = "
            <h3>Message de $prenom $nom</h3>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Sujet :</strong> $sujet</p>
            <p><strong>Message :</strong><br>$message</p>
        ";

        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Message envoyé avec succès.']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Erreur : ' . $mail->ErrorInfo]);
    }
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
}

ob_end_flush();
exit;
