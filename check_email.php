<?php
session_start();


include '_includes/db1.inc.php';    


$email=$_POST['email'];
$code=rand(1200000,9867676);
$_SESSION['scode'] = $code;
$to = $email;
$subject = "Verification Code";
$message = "Your Verification Code  is ".$code;
$headers = "From: donotreply@webcods.in";
mail($to, $subject, $message, $headers);
echo $_POST['email'];
echo $code;
$_SESSION['email']=$email;

header('Location:verify.php');
?>