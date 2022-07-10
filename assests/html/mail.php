<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$sub= $_POST['subject'];
$message= $_POST['msg'];

$to = "mahesh.paul.j@gmail.com";
$subject= "Mail from contact me";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject=". $sub . "\r\n Message =" . $message;
$headers = "From: contactmailcib@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>