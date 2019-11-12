<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST['message'];

$mailTo = "aleena-a@hotmail.com";
$headers = "From: ".$visitor_email;
$txt ="You have revieved an email from my web portfolio by ".$name.".\n\n".$message;



mail($mailTo, $subject, $txt, $headers);
header("Location: contact.php?mailsend");
}

?>


