<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class Mails extends Controller
{
    public function Send(Request $request)
    {
//        $to      = 'house@gmail.com';
//        $subject = 'С сайта';
//        $message = "";
//        $headers = 'From: webmaster@example.com' . "\r\n" .
//            'X-Mailer: PHP/' . phpversion();
//
//        mail($to, $subject, $message, $headers);

        $name = $request->input('name');
        $mail = $request->input('email');
        $phone = $request->input('phone');
        $body = $request->input('body');
        $gtoken = $request->input('gtoken');
        if ($phone == '' || $name == '')
        {
            abort(400);
        }
        $text = "Имя: $name; Телефон: $phone; Почта: $mail; Сообщение: $body";

$post_data = "secret=6LcUGmEUAAAAAJ-PY-xwOjrwBwoaRABIVAIXOEKv&response=".$gtoken;
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=utf-8', 'Content-Length: ' . strlen($post_data)));
     curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
     $response = curl_exec($ch);
     $rep = json_decode($response);
     curl_close($ch);
if ($rep->success == true)
  {


 $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //$mail->SMTPDebug = 2;
                   // $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};
                    $mail->Port = 465;
                    $mail->isSMTP();                                      // Set mailer to use SMTP

                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
                    $mail->Username = 'krovlidom2@gmail.com';                 // SMTP username
                    $mail->Password = 'dom642296';                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->setFrom('krovlidom2@gmail.com', 'Mailer');
                    $mail->addAddress('dktaganrog@gmail.com', 'Krovli Dom');     // Add a recipient
                    $mail->addReplyTo('no-reply@dktaganrog.ru', 'noreply');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'From DkTaganrog';
                    $mail->Body    = $text;
                    $mail->AltBody = '';
                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo $e;
                }
  }
    }
}
