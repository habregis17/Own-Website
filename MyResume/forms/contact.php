<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['sendmessage'])){
   //  header("location:Thankyou.html"); 
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Subject=$_POST['subject'];
    $Message = $_POST['message'];
  
   header('location:Success/');
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'talentmatchrwanda@gmail.com';                     // SMTP username
    $mail->Password   = 'Talentmatch2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('habregis17@gmail.com', 'Website Messages');
    $mail->addAddress('talentmatchrwanda@gmail.com');     // Add a recipient
    

    
    // Content

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'FROM REGIS TECH WEBSITE';
    $mail->Body    =  'Name: '.$Name.'<br><br>
                       Email: '.$Email.'<br><br>
                       Subject: '.$Subject.'<br><br>
                       Message: '.$Message.' ';

    $mail->send();
    

}

?>