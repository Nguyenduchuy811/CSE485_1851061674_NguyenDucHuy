<?php  
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';  
$mail = new PHPMailer(true);

 $mail->SMTPDebug = 3;                                  // Enable verbose debug output  
 $mail->isSMTP();                                       // Set mailer to use SMTP  
 $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
 $mail->SMTPAuth = true;                                // Enable SMTP authentication  
 $mail->Username = 'nguyenduchuyhn811@gmail.com';               // your SMTP username  
 $mail->Password = 'qxdglwcetezjgyqg';                      // your SMTP password  
 $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
 $mail->Port = 587;                                     // TCP port to connect to  
 $mail->setFrom('nguyenduchuyhn811@gmail.com', 'Nguyen Đuc Huy');  
 $mail->addAddress('web2code2vn@gmail.com');                 // Name is optional  
 $mail->addReplyTo('web2code2vn@gmail.com', 'Information');   
//  $mail->addCC('cc@example.com');                        // set your CC email address  
//  $mail->addBCC('bcc@example.com');                      // set your BCC email address  
 $mail->isHTML(true);                                   // Set email format to HTML  
 $mail->Subject = 'Điem danh';  
 $mail->Body  = 'Nguyễn Đức Huy 60TH5 1851061674';  
 if($mail->send()) {  
   echo 'Message has been sent';  
 } else {  
   echo 'Message could not be sent';  
 }   
 ?>  