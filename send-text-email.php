<?php
// $to = 'anilkolase3355@gmail.com';
// $subject = 'Morning message';
// $message = 'Hi, good morning'; 
// $from = 'anilk@mundrisoft.com';
 
// // Sending email
// if(mail($to, $subject, $message)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }


$to = 'anilkolase3355@gmail.com';
$subject = 'Morning message';
$message = 'Hi, good morning'; 
$from = 'anilk@mundrisoft.com';
// $headers = 'From: anilk@mundrisoft.com' . "\r\n" .
//     'Reply-To: anilk@mundrisoft.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message);
?>

