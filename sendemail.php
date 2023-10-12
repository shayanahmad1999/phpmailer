<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    if($_POST['email'] == ""){
        header("location:index.php?msg=error");
    }
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '170dcd834eee56';
    $mail->Password = '5dc67208d60807';

    $mail->setFrom('shayanahmad235@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    $mail->send();

    echo"
    <p 
        style='font-size:40px; text-align:center; color:green;'
    >
        email send please check your email
    </p>
    <a href='index.php'>back</a>
    ";
}

?>