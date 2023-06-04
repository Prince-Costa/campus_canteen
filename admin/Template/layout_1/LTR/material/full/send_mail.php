<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

try {                 
    $mail->isSMTP();      
    $mail->Host     = 'smtp.mailtrap.io';                                        
    $mail->SMTPAuth = true;
    $mail->Username = 'bae8882e3f28e8';
    $mail->Password = '6b2128c78561de';                               
    $mail->Port = 587;                                      

    //Recipients
    $mail->setFrom('princecosta9@gmail.com', 'Prince Costa');
    $mail->addAddress('ibusiness.td@gmail.com');  //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');


    $mail->addAttachment($uploads.'6476c25600a7b_Screenshot 2023-05-25 113414.png', '6476c25600a7b_Screenshot 2023-05-25 113414.png'); 

    //Content
    $mail->isHTML(true);                
    $mail->Subject = 'Job Alert';
    $mail->Body    = 'Hi there, you have a chance to join with us</b>';
    $mail->AltBody = 'You can join with us.';

    $mail->send();
    echo 'Message has been sent';
    redirect('products.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}