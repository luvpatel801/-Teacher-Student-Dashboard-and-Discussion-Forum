<?php
	session_start();	


include '_includes/db1.inc.php';    


	if(isset($_POST['login-submit'])) {
		$id=$_POST['email'];
		$pass=$_POST['password'];
		
			$res=mysqli_query($conn,"SELECT * FROM admin_details WHERE Admin_User_Id='".$id."' AND Admin_Pswd='".$pass."'");
	
if (mysqli_num_rows($res) > 0) {
		
		header('Location:admin_dashboard.html');
		}
else
{
echo "Wrong Input.. REdirecting";
header("Refresh:1; url=admin_login.php");
}
}
?>