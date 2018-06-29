<?php
include 'func.php';
include './assets/libs/class.phpmailer.php';
include './assets/libs/class.smtp.php';
$connect = mysqli_connect("localhost", "root", "", "tsz");
if (($x = upload_success()) == true) {
    $to = find_mail($_POST['deptid']);
    $from = "noreply@thesaferzone.com";
    $from_name = "TheSaferZone";
    $subject = $_POST['sub'];
    $body = $_POST['content'];
    $email = new PHPMailer();
    $email->From = $from;
    $email->FromName = $from_name;
    $email->Subject = $subject;
    $email->Body = $body;
    $email->AddAddress($to);
    $email->AddAttachment('/uploads', $_FILES['fileToUpload']['name'], 'base64', 'application/octet-stream');
    if (!$email->Send()) {
        $error = 'Mail error: ' . $mail->ErrorInfo;
        return false;
    } else {
        $error = 'Message sent!';
        return true;
    }
}
?>