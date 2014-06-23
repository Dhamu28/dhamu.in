<?php
        if(!isset($_POST['submit']))    
{        echo 	"erroe, you need to submit the form";}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['massage'];

  //validate first
if(empty($name)||empty($visitor_email))
    { echo "Name and Email are mendentory!!!";
    exit;
}
$email_from = "sutahrjugalk@gmail.com"; // put your email address here
$email_subject = "New from submission";
$email_body = " this email receved form your website visitor $name\n".
    "$email_address: $visitor_email\n".
    "Here is the massage:\n $message".
$to = "sutharjugalk@gmail.com" // put your email here
$headers = "From: $email_from\r\n";
// send mail
mail($to, $email_subject, $email_body, $headers);
?>