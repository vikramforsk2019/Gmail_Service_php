<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
  $mail->isSMTP();
   $mail ->SMTPDebug = 1;
   $mail ->SMTPAuth = false;
   $mail ->SMTPSecure = false;
   $mail ->Host = 'relay-hosting.secureserver.net';
   $mail ->Port = 25; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "roomseeker98@gmail.com";
   $mail ->Password = "lifechanger";
   $mail ->SetFrom("roomseeker98@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "jjdjd";
   }
   else
   {
       echo "Mail Sent";
   }





   

