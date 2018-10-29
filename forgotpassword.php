<?php

session_start();

include '_includes/db1.inc.php';    


	if(isset($_POST['submit'])) {
		$_SESSION['email']=$_POST['email'];
$_SESSION['ty']="hjg";
$code=rand(9999,999999);
echo $code;
$_SESSION['scode']=$code;
$to = $_SESSION['email'];
echo $to;
$subject = "Verification Code";
$message = "Your Verification Code  is ".$code;
$headers = "From: donotreply@webcods.in";
mail($to, $subject, $message, $headers);
		
			header('Location:verify.php');
				
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
		<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
		<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		
	</head>
	
	
	<body>
		<div class="container" padding-top="5%">
			<div class="row">
				<table width="100%">
					<tr>
						<td width="45%">
						</td>
						
						<td width="10%" align="center">
							<img src="./images/logo.png" align="center">
							<br><br><br><br>
							<br><br><br><br>
							<br><br><br><br>
						</td>
						
						<td width="45%">
						</td>
					</tr>
				</table>
			</div>
			
			<div class="row">
				<table width="100%">
					<tr>
						
						<td align="center">
							<form method="post" action="">
<label>Enter Email ID</label> 
 
<input type="email" name="email">
<input type="submit" name="submitt">
</form>
							
						</td>
						
					</tr>
				</table>
			</div>
			
		</div>
	</body>
</html>