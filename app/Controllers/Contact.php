<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Contact extends BaseController
{
    public function index()
    {
        return view('landing/contact');
    }

    public function email()
    {
        $request = \Config\Services::request();

        $name = $request->getPost('name');
        $email = $request->getPost('email');
        $subject = $request->getPost('subject');
        $message = $request->getPost('message');

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ickos.pekalongan@gmail.com';
            $mail->Password   = 'bxcgtqzuqpuheagl';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Recipients
            $mail->setFrom('ickos.pekalongan@gmail.com', 'Mailer');
            $mail->addAddress('ickos.pekalongan@gmail.com'); // Your receiving email
            // $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "From: $name<br>Email: $email<br><br>Message:<br>$message";
            $mail->AltBody = "From: $name\nEmail: $email\n\nMessage:\n$message";    

            $mail->send();
            return redirect()->to('/contact')->with('success', 'Message has been sent');
        } catch (Exception $e) {
            return redirect()->to('/contact')->with('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

}
